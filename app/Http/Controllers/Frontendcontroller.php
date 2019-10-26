<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
	private $page="Frontend/";
    //
    public function about(){
    	return view($this->page.'about');
    }
    public function index(){
    	return view('Frontend/home');
    }
}
