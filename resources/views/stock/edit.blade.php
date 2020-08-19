@extends('layouts.app')
@section('content')
<script>
    function hide_quan(x)
    {
        if(x==0)
        document.getElementById('quan_field').style.display = "block";//display
        else
        document.getElementById('quan_field').style.display = "none";//hide
        document.getElementById('quantity').value='';
        
    }
</script>

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
                    <div > <a href="/stock" class="btn btn-primary "> Go Back </a></div>
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
                            {{ Form::label('type','Type') }}
                            {{ Form::label('service_type','Service',['class'=> 'col-sm-auto']) }}
                            {{ Form::radio('type', 'service',$item->type == 'service' ? 'checked' : '',['onchange' => 'hide_quan(1)']) }}
                            {{ Form::label('item_type','&emsp; &emsp; Item',['class'=> 'col-sm-auto']) }}
                            {{ Form::radio('type', 'item',$item->type == 'item' ? 'checked' : '',['onchange' => 'hide_quan(0)']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('description','Description') }}
                            {{ Form::text('description',$item->description,['class'=> 'form-control','placeholder'=>'Description']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('amount','Amount') }}
                            {{ Form::text('amount',$item->amount,['class'=> 'form-control','placeholder'=>'Amount']) }}
                        </div>
                       @if($item->type=='item') 
                            <div class="form-group" id="quan_field">
                                {{ Form::label('quantity','Quantity') }}
                                {{ Form::text('quantity',$item->quantity,['class'=> 'form-control','placeholder'=>'Quantity']) }}
                            </div>
                        @else
                            <div class="form-group" id="quan_field" style="display:none;">
                                {{ Form::label('quantity','Quantity') }}
                                {{ Form::text('quantity',$item->quantity,['class'=> 'form-control','placeholder'=>'Quantity']) }}
                            </div>
                        @endif
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