<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return view('pages.dashboard-transaction');
    }

     public function product(){
        return view('pages.dashboard-products');
    }

    public function detail(){
        return view('pages.dashboard-transaction-details');
    }

    public function create(){
        return view('pages.dashboard-products-create');
    }
   
        
}
