@extends('layouts.app')

@section('title', isset($bcategory) ? $bcategory->name . '填空题' : '填空题列表')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 blank-list">
        
         @if (isset($bcategory))
            <div class="alert alert-info" role="alert">
                {{ $bcategory->name }} ：{{ $bcategory->description }}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="{{ route('blanks.create', Auth::id()) }}" class="btn btn-success" role="button">
                    新建
                </a>
            </div>

            <div class="panel-body">
                {{-- 话题列表 --}}
                @include('blanks._blank_list', ['blanks' => $blanks])
                {{-- 分页 --}}
                {!! $blanks->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        @include('blanks._sidebar')
    </div>
</div>

@endsection