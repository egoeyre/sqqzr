<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaperRequest;
use Auth;
use App\Models\Category;
use App\Models\Choice;
use App\Models\Blank;
use App\Models\Question;
use App\Handlers\PDFCreateHandler;


class PapersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		// $blanks = Blank::where('bcategory_id', $bcategory->id)->paginate(20);
		$user_id = Auth::id();
		$papers = Paper::where('user_id', $user_id)->with('user', 'category')->paginate(20);
		return view('papers.index', compact('papers'));
	}

    public function show(Paper $paper)
    {
        return view('papers.show', compact('paper'));
    }

	public function create(Paper $paper)
	{
		$categories = Category::all();
		return view('papers.create_and_edit', compact('paper', 'categories'));
	}

	public function store(PaperRequest $request, PDFCreateHandler $pdf, Paper $paper)
	{
		
		$paper->fill($request->all());
		$paper->user_id = Auth::id();
		$category = $paper->category_id;
		// 随机生成指定数量的选择/填空/问答题
		$choices = Choice::where('category_id', $category)->inRandomOrder() 
                ->take($paper->choice_amount) 
                ->get(); 
        $blanks = Blank::where('bcategory_id', $category)->inRandomOrder() 
                ->take($paper->blank_amount) 
                ->get(); 
        $questions = Question::where('qcategory_id', $category)->inRandomOrder() 
                ->take($paper->question_amount) 
                ->get(); 

		$result = $pdf->make('papers', $paper, $category, $choices, $blanks, $questions);
        $paper->paper_address = $result['paperpath'];
        $paper->answer_address = $result['answerpath'];
		$paper->save();
		return redirect()->route('papers.show', $paper->id)->with('message', 'Created successfully.');
	}

	public function edit(Paper $paper)
	{
        $this->authorize('update', $paper);
		return view('papers.create_and_edit', compact('paper'));
	}

	public function update(PaperRequest $request, Paper $paper)
	{
		$this->authorize('update', $paper);
		$paper->update($request->all());

		return redirect()->route('papers.show', $paper->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Paper $paper)
	{
		$this->authorize('destroy', $paper);
		$paper->delete();

		return redirect()->route('papers.index')->with('message', 'Deleted successfully.');
	}
}