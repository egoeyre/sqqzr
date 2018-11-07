@extends('layouts.app')

@section('title', $paper->title)

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    作者：{{ $paper->user->name }}
                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="{{ route('users.show', $paper->user->id) }}">
                            <img class="thumbnail img-responsive" src="{{ $paper->user->avatar }}" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 paper-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $paper->title }} 
                </h1>

                <div class="article-meta text-center">
                    {{ $paper->created_at }}
                </div>

                <div class="paper-body">
                    <h3>{{ $paper->title }} {{ $paper->category->name }} 考试试题
                    共 {{ $paper->choice_amount * $paper->choice_score + $paper->blank_amount * $paper->blank_score + $paper->question_amount * $paper->question_score}} 分</h3>
                    <p>
                        选择题数量 {{ $paper->choice_amount }}，每题 {{ $paper->choice_score }} 分，共 {{ $paper->choice_amount * $paper->choice_score }} 分；
                    </p> 
                    <p>
                        填空题空数 {{ $paper->blank_amount }}，每空 {{ $paper->blank_score }} 分，共 {{ $paper->blank_amount * $paper->blank_score }} 分；
                    </p> 
                    <p>
                        问答题数量 {{ $paper->question_amount }}，每题 {{ $paper->question_score }} 分，共 
                    {{ $paper->question_amount * $paper->question_score }} 分。
                    <hr>
                    <p>下载点击鼠标右键 链接另存为...</p>
                    <p>
                        <a href="{{ $paper->paper_address }}">试卷下载</a> 
                    </p> 
                    <p>
                        <a href="{{ $paper->answer_address }}">答案下载</a>
                    </p>
                    
                </div>

                <div class="operate">
                @can('destroy', $paper)
                    <hr>
                       <form action="{{ route('papers.destroy', $paper->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left: 6px">
                                <i class="glyphicon glyphicon-trash"></i>
                                删除
                            </button>
                        </form>
                    </div>
                @endcan
                </div>

            </div>
        </div>
    </div>
</div>
@stop