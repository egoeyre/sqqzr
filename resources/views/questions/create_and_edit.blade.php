@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($question->id)
                        编辑问答题
                    @else
                        新建问答题
                    @endif
                </h2>

                <hr>

                @include('common.error')

                @if($question->id)
                    <form action="{{ route('questions.update', $question->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('questions.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <select class="form-control" name="qcategory_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($qcategories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title-field">题目</label>
                        <textarea name="title" id="title-field" class="form-control" rows="3" placeholder="请填写题目" required>{{ old('title', $question->title ) }}</textarea>
                    </div> 
                    <div class="form-group">
                        <label for="answer-field">正确答案</label>
                        <textarea name="answer" id="answer-field" class="form-control" rows="3" placeholder="请填写正确答案" required>{{ old('answer', $question->answer ) }}</textarea>
                    </div> 


                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
