<?php

namespace App\Http\Controllers;

use App\Models\Blank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlankRequest;
use App\Models\Category;
use Auth;

class BlanksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$blanks = Blank::with('user', 'category')->paginate(30);
		return view('blanks.index', compact('blanks'));
	}

    public function show(Blank $blank)
    {
        return view('blanks.show', compact('blank'));
    }

	public function create(Blank $blank)
	{
		$categories = Category::all();
		return view('blanks.create_and_edit', compact('blank', 'categories'));
	}

	public function store(BlankRequest $request, Blank $blank)
	{
		$blank->fill($request->all());
        $blank->user_id = Auth::id();
        $blank->save();
		return redirect()->route('blanks.show', $blank->id)->with('message', 'Created successfully.');
	}

	public function edit(BlankRequest $request, Blank $blank)
	{
        $this->authorize('update', $blank);
        $categories = Category::all();
		return view('blanks.create_and_edit', compact('blank', 'categories'));
	}

	public function update(BlankRequest $request, Blank $blank)
	{
		$this->authorize('update', $blank);
		$blank->update($request->all());

		return redirect()->route('blanks.show', $blank->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Blank $blank)
	{
		$this->authorize('destroy', $blank);
		$blank->delete();

		return redirect()->route('blanks.index')->with('message', 'Deleted successfully.');
	}
}