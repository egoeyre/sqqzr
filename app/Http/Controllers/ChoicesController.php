<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChoiceRequest;

class ChoicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$choices = Choice::paginate();
		return view('choices.index', compact('choices'));
	}

    public function show(Choice $choice)
    {
        return view('choices.show', compact('choice'));
    }

	public function create(Choice $choice)
	{
		return view('choices.create_and_edit', compact('choice'));
	}

	public function store(ChoiceRequest $request)
	{
		$choice = Choice::create($request->all());
		return redirect()->route('choices.show', $choice->id)->with('message', 'Created successfully.');
	}

	public function edit(Choice $choice)
	{
        $this->authorize('update', $choice);
		return view('choices.create_and_edit', compact('choice'));
	}

	public function update(ChoiceRequest $request, Choice $choice)
	{
		$this->authorize('update', $choice);
		$choice->update($request->all());

		return redirect()->route('choices.show', $choice->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Choice $choice)
	{
		$this->authorize('destroy', $choice);
		$choice->delete();

		return redirect()->route('choices.index')->with('message', 'Deleted successfully.');
	}
}