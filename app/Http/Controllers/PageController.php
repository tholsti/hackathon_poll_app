<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
    	return view('index');
    }

    // public function show() {
    // 	return view('show');
    // }
    
    public function show_user_polls() {
    	return view('manage.show');
    }

    
}
