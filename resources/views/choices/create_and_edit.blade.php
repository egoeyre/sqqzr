@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Choice /
                    @if($choice->id)
                        Edit #{{$choice->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($choice->id)
                    <form action="{{ route('choices.update', $choice->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('choices.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $choice->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $choice->category_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<textarea name="title" id="title-field" class="form-control" rows="3">{{ old('title', $choice->title ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="optiona-field">Optiona</label>
                	<input class="form-control" type="text" name="optiona" id="optiona-field" value="{{ old('optiona', $choice->optiona ) }}" />
                </div> 
                <div class="form-group">
                	<label for="optionb-field">Optionb</label>
                	<input class="form-control" type="text" name="optionb" id="optionb-field" value="{{ old('optionb', $choice->optionb ) }}" />
                </div> 
                <div class="form-group">
                	<label for="optionc-field">Optionc</label>
                	<input class="form-control" type="text" name="optionc" id="optionc-field" value="{{ old('optionc', $choice->optionc ) }}" />
                </div> 
                <div class="form-group">
                	<label for="optiond-field">Optiond</label>
                	<input class="form-control" type="text" name="optiond" id="optiond-field" value="{{ old('optiond', $choice->optiond ) }}" />
                </div> 
                <div class="form-group">
                	<label for="answer-field">Answer</label>
                	<input class="form-control" type="text" name="answer" id="answer-field" value="{{ old('answer', $choice->answer ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('choices.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection