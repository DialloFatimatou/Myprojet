<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClientController extends Controller
{
    //
    public function home(){
        return view('client/home');
    }

    public function shop(){
        return view('client/shop');
    }
    public function cart(){
        return view('client/cart');
    }
    public function register(){
        return view('client/register');
    }
    public function signIn(){
        return view('client/signIn');
    }
    public function checkout(){
        return view('client/checkout');
    }
}
