<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{

    public function index(Request $request){
        return view('study.index');
    }

    public function new(Request $request){
        return view('study.new');
    }

    public function show($id){
        return view('study.show');
    }
}
