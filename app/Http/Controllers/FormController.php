<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function store(){
        return view('site.store');
    }
}
