<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Tcategory;

class TcategoriesController extends Controller
{
    public function show(Tcategory $tcategory, Request $request, Topic $topic)
    {
        // 读取分类 ID 关联的话题，并按每 20 条分页
        $topics = $topic->withOrder($request->order)
                        ->where('tcategory_id', $tcategory->id)
                        ->paginate(20);
        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics', 'tcategory'));
    }
}