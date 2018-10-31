<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Qcategory;
use Auth;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	
	public function index()
	{
		$questions = Question::with('user', 'qcategory')->paginate(30);
		return view('questions.index', compact('questions'));
	}

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

	public function create(Question $question)
	{
		$qcategories = Qcategory::all();
		return view('questions.create_and_edit', compact('question', 'qcategories'));
	}

	public function store(QuestionRequest $request, Question $question)
	{
		$question->fill($request->all());
        $question->user_id = Auth::id();
        $question->save();
		return redirect()->route('questions.show', $question->id)->with('message', 'Created successfully.');
	}

	public function edit(QuestionRequest $request, Question $question)
	{
        $this->authorize('update', $question);
        $qcategories = Qcategory::all();
		return view('questions.create_and_edit', compact('question', 'qcategories'));
	}

	public function update(QuestionRequest $request, Question $question)
	{
		$this->authorize('update', $question);
		$question->update($request->all());

		return redirect()->route('questions.show', $question->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Question $question)
	{
		$this->authorize('destroy', $question);
		$question->delete();

		return redirect()->route('questions.index')->with('message', 'Deleted successfully.');
	}
}