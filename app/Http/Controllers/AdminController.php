<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function addcategory(){
        return view('admin.addcategory');
    }
    public function categories(){
        return view('admin.categories');
    }
    public function addsliders(){
        return view('admin.addsliders');
    }
    public function sliders(){
        return view('admin.sliders');
    }
    public function addproduit(){
        return view('admin.addproduit');
    }
    public function produits(){
        return view('admin.produits');
    }
    public function orders(){
        return view('admin.orders');
    }
}
