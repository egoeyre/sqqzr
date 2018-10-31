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
                <a href="{{ route('questions.create', Auth::id()) }}" class="btn btn-success" role="button">
                    新建
                </a>
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