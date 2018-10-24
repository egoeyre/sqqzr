@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Choice / Show #{{ $choice->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('choices.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('choices.edit', $choice->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $choice->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $choice->category_id }}
</p> <label>Title</label>
<p>
	{{ $choice->title }}
</p> <label>Optiona</label>
<p>
	{{ $choice->optiona }}
</p> <label>Optionb</label>
<p>
	{{ $choice->optionb }}
</p> <label>Optionc</label>
<p>
	{{ $choice->optionc }}
</p> <label>Optiond</label>
<p>
	{{ $choice->optiond }}
</p> <label>Answer</label>
<p>
	{{ $choice->answer }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
