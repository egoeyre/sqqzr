@extends('layouts.app')

@section('title', '话题列表')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 paper-list">
        <div class="panel panel-default">

            <div class="panel-heading">
                <a href="{{ route('papers.create', Auth::id()) }}" class="btn btn-success" role="button">
                    生成试卷
                </a>
            </div>

            <div class="panel-body">
                {{-- 话题列表 --}}
                @include('papers._paper_list', ['papers' => $papers])
                {{-- 分页 --}}
                {!! $papers->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 sidebar">
        @include('papers._sidebar')
    </div>
    
</div>


@endsection