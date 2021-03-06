@extends('layouts.app')

@section('title', $blank->title)

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                    出题人：{{ $blank->user->name }}
                </div>
                <hr>
                <div class="media">
                    <div align="center">
                        <a href="{{ route('users.show', $blank->user->id) }}">
                            <img class="thumbnail img-responsive" src="{{ $blank->user->avatar }}" width="300px" height="300px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blank-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">
                    {{ $blank->bcategory->name }}填空题
                </h1>s

                <div class="article-meta text-center">
                    {{ $blank->created_at }}
                </div>

                <div class="blank-title">
                    <h3>题目 ：{!! $blank->title !!}</h3>
                </div>

                <div class="blank-answer">
                    <h3>答案 ：{!! $blank->answer !!}</h3>
                </div>

                @can('update', $blank)
                    <div class="operate">
                        <hr>
                        <a href="{{ route('blanks.edit', $blank->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                            <i class="glyphicon glyphicon-edit"></i> 编辑
                        </a>

                        <form action="{{ route('blanks.destroy', $blank->id) }}" method="post">
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