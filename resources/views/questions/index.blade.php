@extends('layouts.app')
@section('title', isset($qcategory) ? $qcategory->name . '问答题' : '话题列表')

@section('title', '话题列表')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 question-list">
        @if (isset($qcategory))
            <div class="alert alert-info" role="alert">
                {{ $qcategory->name }} ：{{ $qcategory->description }}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">最后回复</a></li>
                    <li role="presentation"><a href="#">最新发布</a></li>
                </ul>
            </div>

            <div class="panel-body">
                {{-- 话题列表 --}}
                @include('questions._question_list', ['questions' => $questions])
                {{-- 分页 --}}
                {!! $questions->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        @include('questions._sidebar')
    </div>
</div>

@endsection