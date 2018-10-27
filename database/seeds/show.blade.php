@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Question / Show #{{ $question->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('questions.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('questions.edit', $question->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $question->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $question->category_id }}
</p> <label>Title</label>
<p>
	{{ $question->title }}
</p> <label>answer</label>
<p>
	{{ $question->answer }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
