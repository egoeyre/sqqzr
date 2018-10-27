@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Blank /
                    @if($blank->id)
                        Edit #{{$blank->id}}
                    @else
                        Create
                    @endif
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($blank->id)
                    <form action="{{ route('blanks.update', $blank->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('blanks.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $blank->user_id ) }}" />
                </div> 
                <div class="form-group">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $blank->category_id ) }}" />
                </div> 
                <div class="form-group">
                	<label for="title-field">Title</label>
                	<textarea name="title" id="title-field" class="form-control" rows="3">{{ old('title', $blank->title ) }}</textarea>
                </div> 
                <div class="form-group">
                	<label for="anwser-field">Anwser</label>
                	<input class="form-control" type="text" name="anwser" id="anwser-field" value="{{ old('anwser', $blank->anwser ) }}" />
                </div> 
                <div class="form-group">
                    <label for="amount-field">Amount</label>
                    <input class="form-control" type="text" name="amount" id="amount-field" value="{{ old('amount', $blank->amount ) }}" />
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('blanks.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection