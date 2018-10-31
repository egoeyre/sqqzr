@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($blank->id)
                        编辑填空题
                    @else
                        新建填空题
                    @endif
                </h2>

                <hr>

                @include('common.error')

                @if($blank->id)
                    <form action="{{ route('blanks.update', $blank->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('blanks.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <select class="form-control" name="category_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($bcategories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title-field">题目</label>
                        <textarea name="title" id="title-field" class="form-control" rows="3" placeholder="请填写题目" required>{{ old('title', $blank->title ) }}</textarea>
                    </div> 
                    <div class="form-group">
                        <label for="answer-field">正确答案</label>
                        <input class="form-control" type="text" name="answer" id="answer-field" value="{{ old('answer', $blank->answer ) }}" placeholder="请填写正确答案，不同填空内容建议用/分隔" required/>
                    </div>
                    <div class="form-group">
                        <label for="amount-field">填空数量</label>
                        <input class="form-control" type="text" name="amount" id="amount-field" value="{{ old('amount', $blank->amount ) }}" placeholder="请填写填空数量" required/>
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
