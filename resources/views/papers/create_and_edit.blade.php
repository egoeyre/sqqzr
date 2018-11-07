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
                    <hr>
                    <div class="form-group">
                        <select class="form-control" name="category_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($categories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label>选择分类（可复选）</label>
                        @foreach ($categories as $value)
                        <label class="checkbox-inline">
                          <input type="checkbox" id="inlineCheckbox" value="{{ $value->id }}"> {{ $value->name }}
                        </label>
                        @endforeach
                    </div> -->
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="choice_score-field">选择题数量</label>
                            <input class="form-control" type="text" name="choice_amount" id="choice_amount-field" value="{{ old('choice_amount', $paper->choice_amount ) }}" />
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="choice_score-field">选择题分值</label>
                            <input class="form-control" type="text" name="choice_score" id="choice_score-field" value="{{ old('choice_score', $paper->choice_score ) }}" />
                        </div>  
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group  col-md-6">
                            <label for="blank_amount-field">填空题总空数</label>
                            <input class="form-control" type="text" name="blank_amount" id="blank_amount-field" value="{{ old('blank_amount', $paper->blank_amount ) }}" />
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="blank_score-field">每空分值</label>
                            <input class="form-control" type="text" name="blank_score" id="blank_score-field" value="{{ old('blank_score', $paper->blank_score ) }}" />
                        </div> 
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="question_amount-field">问答题数量</label>
                            <input class="form-control" type="text" name="question_amount" id="question_amount-field" value="{{ old('question_amount', $paper->question_amount ) }}" />
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="question_score-field">问答题分值</label>
                            <input class="form-control" type="text" name="question_score" id="question_score-field" value="{{ old('question_score', $paper->question_score ) }}" />
                        </div> 
                    </div>
                     
                    
                    

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 生成试卷</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection