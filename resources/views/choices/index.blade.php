@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Choice
                    <a class="btn btn-success pull-right" href="{{ route('choices.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($choices->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>User_id</th> <th>Category_id</th> <th>Title</th> <th>Optiona</th> <th>Optionb</th> <th>Optionc</th> <th>Optiond</th> <th>Answer</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($choices as $choice)
                                <tr>
                                    <td class="text-center"><strong>{{$choice->id}}</strong></td>

                                    <td>{{$choice->user_id}}</td> <td>{{$choice->category_id}}</td> <td>{{$choice->title}}</td> <td>{{$choice->optiona}}</td> <td>{{$choice->optionb}}</td> <td>{{$choice->optionc}}</td> <td>{{$choice->optiond}}</td> <td>{{$choice->answer}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('choices.show', $choice->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('choices.edit', $choice->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('choices.destroy', $choice->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $choices->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection