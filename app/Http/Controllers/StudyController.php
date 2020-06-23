<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{

    public function index(Request $request){
        $studies = Study::all();
        return view('study.index',['studies'=>$studies]);
        // return $study;
    }

    public function new(Request $request){
        return view('study.create');
    }

    public function show($id){
        return view('study.show');
    }
}
