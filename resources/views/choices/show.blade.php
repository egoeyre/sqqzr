@extends('layouts.app')

@section('title', $choice->title)

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    出题人：{{ $choice->user->name }}
                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="{{ route('users.show', $choice->user->id) }}">
                            <img class="thumbnail img-responsive" src="{{ $choice->user->avatar }}" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 choice-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $choice->category->name }} 选择题
                </h1>

                <div class="article-meta text-center">
                    {{ $choice->created_at }}
                </div>

                <div class="choice-title">
                    <h3>题目 ：{!! $choice->title !!}</h3>
                </div>
                <div class="choice-optiona">
                    <h3>A . {!! $choice->optiona !!}</h3>
                </div>
                <div class="choice-optionb">
                    <h3>B . {!! $choice->optionb !!}</h3>
                </div>
                <div class="choice-optionc">
                    <h3>C . {!! $choice->optionc !!}</h3>
                </div>
                <div class="choice-optiond">
                    <h3>D . {!! $choice->optiond !!}</h3>
                </div>
                <div class="choice-answer">
                    <h3>答案 ：{!! $choice->answer !!}</h3>
                </div>

                <div class="operate">
                    <hr>
                    <a href="{{ route('choices.edit', $choice->id) }}" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-edit"></i> 编辑
                    </a>
                    <a href="#" class="btn btn-default btn-xs" role="button">
                        <i class="glyphicon glyphicon-trash"></i> 删除
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@stop