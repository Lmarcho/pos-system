@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  ">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="col">
                        Sales Page
                        <form class="form-inline float-right">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" style="border: 1px solid black">
                        <div class="col-md-8" style="border: 1px solid black">
                            <div class="form-group  " >
                                {{ Form::label('item_type','Item',['class'=> 'col-sm-auto']) }}
                                {{ Form::radio('type', 'item',true,['onchange' => 'hide_quan(0)']) }}
                                {{ Form::label('service_type','&emsp; &emsp; Service',['class'=> 'col-sm-auto']) }}
                                {{ Form::radio('type', 'service',false,['onchange' => 'hide_quan(1)']) }}
                                <select class="custom-select ">
                                    <option selected>Select Category</option>
                                    <option value="1">Car</option>
                                    <option value="2">Van</option>
                                    <option value="3">Jeep</option>
                                </select>
                            </div>

                            <div class="row overflow-auto" style="border: 1px solid black">
                                <div class="col-md-12 h-25 " style="border: 1px solid black">
                                    @if(count($items)>0)
                                    @foreach ($items as $item)
                                        <div class="well">
                                        <h3><a href="/stock/{{$item->id}}"> {{$item->name}} </a></h3>
                                        </div>
                                    @endforeach
                                    {{$items->links()}} <!-- if we use pagination in controller we should use this command -->
                                    @else
                                        <p> No items found </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4  " style="border: 1px solid black;">
                             2 test2sasadasdsadsadasdsaddsadsasadsadsadsadadsasdsadasdasdadasdsadasdadsadsad sapi_windows_cp_convsadsadsadsssssssssssssadasdasdasdadadsadfsa safasfafafasfasfasfafqwfsafas fasfasfasfasfasffsaaf
                            <div class="col d-flex flex-wrap align-content-end" style="height:200px" >
                                <div class="row " style="border: 1px solid black">4 test asdasdasldasdaskl;daskdaa;sldka</div>
                                <div class="row " style="border: 1px solid black">5 test asdasdasldasdaskl;daskdaa;sldka</div>
                                <div class="row " style="border: 1px solid black">6 test asdasdasldasdaskl;daskdaa;adaasdsadsldka</div>
                                <div class="row " style="border: 1px solid black">7 test asdasdasldasdaskl;daskdaa;sdsaddaadsldka</div>
                            </div>
                        </div>
                    </div>
                     Sales Dashboard
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
