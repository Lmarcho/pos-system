@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row">
        @if(count($products)>0)
        @foreach ($products as $product)
        <div class="col-3">
            <div class="card">
                <img class="card-img-top"  src="/svg/carLoversLogo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Name :{{$product->name}}</h4>
                    <p class="card-text">Price: {{$product->amount}}</p>
                    <p class="card-text">Quantity: {{$product->quantity}}</p>
                </div>
                <div class="card-body">
                    <a href="{{route('cart.add',$product->id)}}" class="card-link">Add to cart</a>
                </div>
            </div>
        </div>

        @endforeach
        @else
            <p> No items found </p>
        @endif
    </div>
    {{$products->links()}} <!-- if we use pagination in controller we should use this command -->

</div>



@endsection
