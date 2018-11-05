@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Paper /
                    @if($paper->id)
                        Edit #{{$paper->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($paper->id)
                    <form action="{{ route('papers.update', $paper->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('papers.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $paper->title ) }}" />
                </div> 
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $paper->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $paper->category_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="choice_amount-field">Choice_amount</label>
                    <input class="form-control" type="text" name="choice_amount" id="choice_amount-field" value="{{ old('choice_amount', $paper->choice_amount ) }}" />
                </div> 
                <div class="form-group">
                    <label for="choice_score-field">Choice_score</label>
                    <input class="form-control" type="text" name="choice_score" id="choice_score-field" value="{{ old('choice_score', $paper->choice_score ) }}" />
                </div> 
                <div class="form-group">
                    <label for="bcategory_id-field">Bcategory_id</label>
                    <input class="form-control" type="text" name="bcategory_id" id="bcategory_id-field" value="{{ old('bcategory_id', $paper->bcategory_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="blank_amount-field">Blank_amount</label>
                    <input class="form-control" type="text" name="blank_amount" id="blank_amount-field" value="{{ old('blank_amount', $paper->blank_amount ) }}" />
                </div> 
                <div class="form-group">
                    <label for="blank_score-field">Blank_score</label>
                    <input class="form-control" type="text" name="blank_score" id="blank_score-field" value="{{ old('blank_score', $paper->blank_score ) }}" />
                </div> 
                <div class="form-group">
                    <label for="qcategory_id-field">Qcategory_id</label>
                    <input class="form-control" type="text" name="qcategory_id" id="qcategory_id-field" value="{{ old('qcategory_id', $paper->qcategory_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="question_amount-field">Question_amount</label>
                    <input class="form-control" type="text" name="question_amount" id="question_amount-field" value="{{ old('question_amount', $paper->question_amount ) }}" />
                </div> 
                <div class="form-group">
                    <label for="question_score-field">Question_score</label>
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

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('papers.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection