<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Qcategory;

class QcategoriesController extends Controller
{
    public function show(Qcategory $qcategory)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $questions = Question::where('qcategory_id', $qcategory->id)->paginate(20);
        // 传参变量话题和分类到模板中
        return view('questions.index', compact('questions', 'qcategory'));
    }
}