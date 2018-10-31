@extends('layouts.app')

@section('title', isset($category) ? $category->name . '选择题' : '话题列表')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 choice-list">
        
        @if (isset($category))
            <div class="alert alert-info" role="alert">
                {{ $category->name }} ：{{ $category->description }}
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('choices.create', Auth::id()) }}" class="btn btn-success" role="button">
                    新建
                </a>
            </div>

            <div class="panel-body">
                {{-- 话题列表 --}}
                @include('choices._choice_list', ['choices' => $choices])
                {{-- 分页 --}}
                {!! $choices->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        @include('choices._sidebar')
    </div>
</div>

@endsection