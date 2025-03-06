<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    public function getProduct(){
        return view('page.sanpham');
    }
    public function getTypeProduct(){
        return view('page.loaisanpham');
    }
}
