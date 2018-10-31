@extends('layouts.app')

@section('title', $question->title)

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    出题人：{{ $question->user->name }}
                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="{{ route('users.show', $question->user->id) }}">
                            <img class="thumbnail img-responsive" src="{{ $question->user->avatar }}" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 question-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $question->qcategory->name }}问答题
                </h1>

                <div class="article-meta text-center">
                    {{ $question->created_at }}
                </div>

                <div class="question-title">
                    <h3>题目 ：{!! $question->title !!}</h3>
                </div>

                <div class="question-answer">
                    <h3>答案 ：{!! $question->answer !!}</h3>
                </div>

                @can('update', $question)
                    <div class="operate">
                        <hr>
                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>

                        <form action="{{ route('questions.destroy', $question->id) }}" method="post">
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
@stop