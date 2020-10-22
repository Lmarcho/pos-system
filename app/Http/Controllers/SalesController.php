<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sales;
use App\Stock;

class SalesController extends Controller
{

    public function index()
    {
        $products = Stock::orderBy('name','asc')->paginate(8); //paginate means only 10 item for page
        return view('sales.index')->with('products',$products);
    }
}

