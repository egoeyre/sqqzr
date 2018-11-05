@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Paper / Show #{{ $paper->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('papers.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('papers.edit', $paper->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	{{ $paper->title }}
</p> <label>User_id</label>
<p>
	{{ $paper->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $paper->category_id }}
</p> <label>Choice_amount</label>
<p>
	{{ $paper->choice_amount }}
</p> <label>Choice_score</label>
<p>
	{{ $paper->choice_score }}
</p> <label>Bcategory_id</label>
<p>
	{{ $paper->bcategory_id }}
</p> <label>Blank_amount</label>
<p>
	{{ $paper->blank_amount }}
</p> <label>Blank_score</label>
<p>
	{{ $paper->blank_score }}
</p> <label>Qcategory_id</label>
<p>
	{{ $paper->qcategory_id }}
</p> <label>Question_amount</label>
<p>
	{{ $paper->question_amount }}
</p> <label>Question_score</label>
<p>
	{{ $paper->question_score }}
</p> <label>Paper_address</label>
<p>
	{{ $paper->paper_address }}
</p> <label>Answer_address</label>
<p>
	{{ $paper->answer_address }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
