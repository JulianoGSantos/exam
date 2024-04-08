<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Requests\ExamRequest;
use App\Models\Event;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function store(ExamRequest $request){
        $data = new Form();
        $data->user_id = auth()->id();

        $data->first = $request->first;
        $data->second = $request->second;
        $data->third = $request->third;
        $data->fourth = $request->fourth;
        $data->fifth = $request->fifth;

        $data->save();
        
        return view('site.store');
    }
}
