<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard');
    }

     public function product(){
        return view('pages.dashboard-products');
    }

    public function detail(){
        return view('pages.dashboard-products-details');
    }

    public function create(){
        return view('pages.dashboard-products-create');
    }
   
        
}
