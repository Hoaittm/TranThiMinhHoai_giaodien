<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('fontend.product');
    }
    public function product_detail($slug)
    {
        return view ('fontend.product_detail',compat('slug','list'));
    }
}