@extends('layouts.app')
@section('content')
<script>
    function hide_quan(x)
    {
        if(x==0)
        document.getElementById('quan_field').style.display = "block";
        else
        document.getElementById('quan_field').style.display = "none";
    }
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="add_item"> <a href="/stock" class="btn btn-default "> Go Back </a></div>
                        {{ Form::open(['action' => 'StockController@store','method' => 'POST'] ) }}
                        <div class="form-group">
                            {{ Form::label('name','Name') }}
                            {{ Form::text('name','',['class'=> 'form-control','placeholder'=>'Name']) }}
                        </div>
                        <div class="form-group" >
                            {{ Form::label('type1','Type') }}<br>
                            {{ Form::label('item_type','Item') }}
                            {{ Form::radio('type', 'item',true,['onchange' => 'hide_quan(0)']) }}
                            {{ Form::label('service_type','&emsp; &emsp;Service') }}
                            {{ Form::radio('type', 'service',false,['onchange' => 'hide_quan(1)']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('category','Category') }}
                            {{ Form::select('category', ['Car' => 'Car', 'Van' => 'Van', 'Jeep' => 'Jeep'], null, ['placeholder' => 'Pick a category...']) }}
                        </div>
                        <div class="form-group" id="test">
                            {{ Form::label('description','Description') }}
                            {{ Form::text('description','',['class'=> 'form-control','placeholder'=>'Description']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('amount','Amount') }}
                            {{ Form::text('amount','',['class'=> 'form-control','placeholder'=>'Amount']) }}
                        </div>
                        <div class="form-group" id="quan_field">
                            {{ Form::label('quantity','Quantity') }}
                            {{ Form::text('quantity','',['class'=> 'form-control','placeholder'=>'Quantity']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('Submit', ['class'=>'btn btn-primary'],['onchange' => 'check_type()']) }} 
                        </div>
                        {{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection