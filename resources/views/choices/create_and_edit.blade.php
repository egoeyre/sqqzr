@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($choice->id)
                        编辑选择题
                    @else
                        新建选择题
                    @endif
                </h2>

                <hr>

                @include('common.error')

                @if($choice->id)
                    <form action="{{ route('choices.update', $choice->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('choices.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <select class="form-control" name="category_id" required>
                            <option value="" hidden disabled selected>请选择分类</option>
                            @foreach ($categories as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title-field">题目（ 选项位置建议用 ___________ 表示。）</label>
                        <textarea name="title" id="title-field" class="form-control" rows="3" placeholder="请填写题目" required>{{ old('title', $choice->title ) }}</textarea>
                    </div> 
                    <div class="form-group">
                        <label for="optiona-field">A选项</label>
                        <input class="form-control" type="text" name="optiona" id="optiona-field" value="{{ old('optiona', $choice->optiona ) }}" placeholder="请填写A选项" required/>
                    </div> 
                    <div class="form-group">
                        <label for="optionb-field">B选项</label>
                        <input class="form-control" type="text" name="optionb" id="optionb-field" value="{{ old('optionb', $choice->optionb ) }}" placeholder="请填写A选项" required/>
                    </div> 
                    <div class="form-group">
                        <label for="optionc-field">C选项</label>
                        <input class="form-control" type="text" name="optionc" id="optionc-field" value="{{ old('optionc', $choice->optionc ) }}" placeholder="请填写B选项" required/>
                    </div> 
                    <div class="form-group">
                        <label for="optiond-field">D选项</label>
                        <input class="form-control" type="text" name="optiond" id="optiond-field" value="{{ old('optiond', $choice->optiond ) }}" placeholder="请填写C选项" required/>
                    </div> 
                    <div class="form-group">
                        <label for="answer-field">正确答案</label>
                        <input class="form-control" type="text" name="answer" id="answer-field" value="{{ old('answer', $choice->answer ) }}" placeholder="请填写正确答案的选项，建议用大写字母" required/>
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