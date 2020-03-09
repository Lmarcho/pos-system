@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="add_item"> <a href="/stock" class="btn btn-default "> Go Back </a></div>
                        {{ Form::open(['action' => ['StockController@update',$item->id],'method' => 'POST'] ) }}
                        <div class="form-group">
                            {{ Form::label('name','Name') }}
                            {{ Form::text('name',$item->name,['class'=> 'form-control','placeholder'=>'Name']) }}
                        </div>
                        <div class="form-group" >
                            {{ Form::label('category','Category') }}
                            {{ Form::select('category',['Car' => 'Car', 'Van' => 'Van', 'Jeep' => 'Jeep'], $item->category, ['placeholder' => 'Pick a category...']) }}
                        </div>
                        <div class="form-group" >
                            {{ Form::label('type','Type') }}<br>
                            {{ Form::label('service_type','Service') }}
                            {{ Form::radio('type', 'service',false) }}
                            {{ Form::label('item_type','&emsp; &emsp; Item') }}
                            {{ Form::radio('type', 'item',false) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description','Description') }}
                            {{ Form::text('description',$item->description,['class'=> 'form-control','placeholder'=>'Description']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('amount','Amount') }}
                            {{ Form::text('amount',$item->amount,['class'=> 'form-control','placeholder'=>'Amount']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('quantity','Quantity') }}
                            {{ Form::text('quantity',$item->quantity,['class'=> 'form-control','placeholder'=>'Quantity']) }}
                        </div>
                        <div class="form-group">
                            {{Form::hidden('_method','PUT')}}
                            {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }} 
                        </div>
                        {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection