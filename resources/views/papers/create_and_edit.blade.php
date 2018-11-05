@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($paper->id)
                        编辑试卷
                    @else
                        生成试卷
                    @endif
                </h2>

                <hr>

                @include('common.error')

                @if($paper->id)
                    <form action="{{ route('papers.update', $paper->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('papers.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input class="form-control" type="text" name="title" value="{{ old('title', $paper->title ) }}" placeholder="请填写评审单位名称" required/>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="category_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($categories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="choice_score-field">选择题数量</label>
                        <input class="form-control" type="text" name="choice_amount" id="choice_amount-field" value="{{ old('choice_amount', $paper->choice_amount ) }}" />
                    </div> 
                    <div class="form-group">
                        <label for="choice_score-field">选择题分值</label>
                        <input class="form-control" type="text" name="choice_score" id="choice_score-field" value="{{ old('choice_score', $paper->choice_score ) }}" />
                    </div> 
                    
                    <div class="form-group">
                        <label for="blank_amount-field">填空题数量</label>
                        <input class="form-control" type="text" name="blank_amount" id="blank_amount-field" value="{{ old('blank_amount', $paper->blank_amount ) }}" />
                    </div> 
                    <div class="form-group">
                        <label for="blank_score-field">填空题分值</label>
                        <input class="form-control" type="text" name="blank_score" id="blank_score-field" value="{{ old('blank_score', $paper->blank_score ) }}" />
                    </div> 
                    
                    <div class="form-group">
                        <label for="question_amount-field">问答题数量</label>
                        <input class="form-control" type="text" name="question_amount" id="question_amount-field" value="{{ old('question_amount', $paper->question_amount ) }}" />
                    </div> 
                    <div class="form-group">
                        <label for="question_score-field">问答题分值</label>
                        <input class="form-control" type="text" name="question_score" id="question_score-field" value="{{ old('question_score', $paper->question_score ) }}" />
                    </div> 
                    <div class="form-group">
                        <label for="paper_address-field">Paper_address</label>
                        <textarea name="paper_address" id="paper_address-field" class="form-control" rows="3">{{ old('paper_address', $paper->paper_address ) }}</textarea>
                    </div> 
                    <div class="form-group">
                        <label for="answer_address-field">Answer_address</label>
                        <textarea name="answer_address" id="answer_address-field" class="form-control" rows="3">{{ old('answer_address', $paper->answer_address ) }}</textarea>
                    </div>
                    <!-- <div class="form-group">
                        <textarea name="body" class="form-control" id="editor" rows="3" placeholder="请填入至少三个字符的内容。" required>{{ old('body', $paper->body ) }}</textarea>
                    </div> -->

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection