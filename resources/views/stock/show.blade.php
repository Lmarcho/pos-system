@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/stock" class="btn btn-default "> Go Back </a> 
            <div class="card">
                <div class="card-header">{{$item->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <div>
                        Item Name : {{$item->name}}
                   </div>
                   <div>
                        Item Category : {{$item->category}}
                    </div>
                    <div>
                        Item Type : {{$item->type}}
                    </div>
                    <div>
                        Item Description : {{$item->description}}
                    </div>
                    <div>
                        Item Amount : {{$item->amount}}
                    </div>
                    <div>
                        Item Quantity : {{$item->quantity}} 
                    </div>
                    <hr>
                    <a href="/stock/{{$item->id}}/edit" class="btn btn-default">Edit</a>
                    {!! Form::open(['action'=>['StockController@destroy',$item->id],'method'=> 'POST','class'=> 'pull-right']) !!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

