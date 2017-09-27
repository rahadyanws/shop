<?php

namespace App\Http\Controllers;

class WebController extends Controller
{
    public function __constract()
    {

    }

    public function index()
    {
    	return view('home');
    }
}
