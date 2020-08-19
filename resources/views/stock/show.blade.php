@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$item->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/stock" class="btn btn-primary "> Go Back </a> 
                   <div class="card">
                        Item Name : {{$item->name}}
                   </div>
                   <div class="card">
                        Item Category : {{$item->category}}
                    </div>
                    <div class="card">
                        Item Type : {{$item->type}}
                    </div>
                    <div class="well">
                        Item Description : {{$item->description}}
                    </div>
                    <div class="well">
                        Item Amount : {{$item->amount}}
                    </div>
                    @if ($item->type=='item')
                    <div class="well">
                        Item Quantity : {{$item->quantity}} 
                    </div>
                        
                    @endif

                    <hr>
                    <a href="/stock/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                    {!! Form::open(['action'=>['StockController@destroy',$item->id],'method'=> 'POST','class'=> 'float-right']) !!}
                        {{ Form::hidden('_method','DELETE') }}
                        {{ Form::submit('Delete',['class'=> 'btn btn-danger']) }}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

