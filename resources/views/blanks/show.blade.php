@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Blank / Show #{{ $blank->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('blanks.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('blanks.edit', $blank->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>User_id</label>
<p>
	{{ $blank->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $blank->category_id }}
</p> <label>Title</label>
<p>
	{{ $blank->title }}
</p> <label>Anwser</label>
<p>
	{{ $blank->anwser }}
</p> <label>Amount</label>
<p>
	{{ $blank->amount }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
