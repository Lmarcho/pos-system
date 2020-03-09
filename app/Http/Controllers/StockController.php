<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //also we can use these quaries as well 
        // $items = Stock::all();
        // return Stock::where('name','item no 1')->get();
        // $items=DB::select('select * from stocks);
        // $items = Stock::orderBy('name','asc')->get();
        
        $items = Stock::orderBy('name','asc')->paginate(10); //paginate mean only 10 item for page 
        return view('stock.index')->with('items',$items);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:stocks',
            'type'=>'required',
            'category'=>'required',
            'description'=>'required|nullable',
            'amount'=>'required|numeric',
            'quantity'=>'integer|nullable'
        ]); 

        // submit button
        $item = new Stock;
        $item->name = $request->input('name');
        $item->type = $request->input('type');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->amount = $request->input('amount');
        $item->quantity = $request->input('quantity');
        $item->save();

        return redirect('/stock')->with('success','Item Added');
        // return $item;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Stock::find($id);
        return view('stock.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $item = Stock::find($id);
        return view('stock.edit')->with('item',$item);
        
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'type'=>'required',
            'category'=>'required',
            'description'=>'required|nullable',
            'amount'=>'required|numeric',
            'quantity'=>'integer|nullable'
        ]); 

        // submit button
        $item = Stock::find($id);
        $item->name = $request->input('name');
        $item->type = $request->input('type');
        $item->category = $request->input('category');
        $item->description = $request->input('description');
        $item->amount = $request->input('amount');
        $item->quantity = $request->input('quantity');
        $item->save();

        return redirect('/stock')->with('success','Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =Stock::find($id);
        $item ->delete();
        return redirect('/stock')->with('success','Item Removed');
    }
}
