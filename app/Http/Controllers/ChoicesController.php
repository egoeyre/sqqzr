<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChoiceRequest;
use App\Models\Category;
use Auth;

class ChoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		//dd($choices);
		$choices = Choice::with('user', 'category')->paginate(30);
		//$choices = Choice::paginate(30);

		return view('choices.index', compact('choices'));
	}

    public function show(Choice $choice)
    {
        return view('choices.show', compact('choice'));
    }

	public function create(Choice $choice)
	{
		$categories = Category::all();
		return view('choices.create_and_edit', compact('choice','categories'));
	}

	public function store(ChoiceRequest $request, Choice $choice)
	{
		$choice->fill($request->all());
		$choice->user_id = Auth::id();
		$choice->save();
		return redirect()->route('choices.show', $choice->id)->with('message', '创建成功！');
	}

	public function edit(ChoiceRequest $request, Choice $choice)
	{
        $this->authorize('update', $choice);
        $categories = Category::all();
		return view('choices.create_and_edit', compact('choice', 'categories'));
	}

	public function update(ChoiceRequest $request, Choice $choice)
	{
		$this->authorize('update', $choice);
		$choice->update($request->all());

		return redirect()->route('choices.show', $choice->id)->with('message', '更新成功！');
	}

	public function destroy(Choice $choice)
	{
		$this->authorize('destroy', $choice);
		$choice->delete();

		return redirect()->route('choices.index')->with('message', '删除成功！');
	}
}