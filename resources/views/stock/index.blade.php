@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stock Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="add_item"> <a href="stock/create" class="btn btn-default"> Add New Item </a>   </div>
                    Fucking Stock Dashboard
                    @if(count($items)>0)
                        @foreach ($items as $item)
                            <div class="well">
                            <h3><a href="/stock/{{$item->id}}"> {{$item->name}} </a></h3>
                            </div>
                        @endforeach
                        {{$items->links()}} 
                    @else
                        <p> No items found </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection