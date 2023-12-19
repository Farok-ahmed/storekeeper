<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function invoice(){
        return view('pages.invoiceList');
    }
    function manageProduct(){
        return view('pages.manageProduct');
    }
    function orderlist(){
        return view('pages.orderList');
    }
    function productAdd(){
        return view('pages.productAdd');
    }
    function productEdit(){
        return view('pages.productEdit');
    }
}
