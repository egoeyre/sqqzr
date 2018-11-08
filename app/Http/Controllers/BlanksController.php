<?php

namespace App\Http\Controllers;

use App\Models\Blank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlankRequest;
use App\Models\Bcategory;
use Auth;

class BlanksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$blanks = Blank::with('user', 'bcategory')->recent()->paginate(30);
		 // dd($blanks);
		return view('blanks.index', compact('blanks'));
	}

    public function show(Blank $blank)
    {
        return view('blanks.show', compact('blank'));
    }

	public function create(Blank $blank)
	{
		$bcategories = BCategory::all();
		return view('blanks.create_and_edit', compact('blank', 'bcategories'));
	}

	public function store(BlankRequest $request, Blank $blank)
	{
		$blank->fill($request->all());
        $blank->user_id = Auth::id();
        $blank->save();
		return redirect()->route('blanks.show', $blank->id)->with('message', '创建成功！');
	}

	public function edit(BlankRequest $request, Blank $blank)
	{
        $this->authorize('update', $blank);
        $bcategories = Bcategory::all();
		return view('blanks.create_and_edit', compact('blank', 'bcategories'));
	}

	public function update(BlankRequest $request, Blank $blank)
	{
		$this->authorize('update', $blank);
		$blank->update($request->all());

		return redirect()->route('blanks.show', $blank->id)->with('message', '更新成功！');
	}

	public function destroy(Blank $blank)
	{
		$this->authorize('destroy', $blank);
		$blank->delete();

		return redirect()->route('blanks.index')->with('message', '删除成功！');
	}
}