<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blank;
use App\Models\Bcategory;

class BcategoriesController extends Controller
{
    public function show(Bcategory $bcategory)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $blanks = Blank::where('bcategory_id', $bcategory->id)->paginate(20);
        // 传参变量话题和分类到模板中
        return view('blanks.index', compact('blanks', 'bcategory'));
    }
}