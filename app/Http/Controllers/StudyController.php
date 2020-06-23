<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

class StudyController extends Controller
{

    public function index(Request $request){
        $studies = Study::orderBy('id','DESC')->take(10)->get();
        return view('study.index',['studies'=>$studies]);
        // return $studies;
    }

    public function create(Request $request){
        return view('study.create');
    }

    public function store(Request $request){
        $study = new Study;
        $study->keyword = $request->keyword;
        $study->language = $request->language;
        $study->time_start = $request->study_start;
        $study->time_end = $request->study_end;
        $study->memo = $request->memo;
        $study->save();
        return redirect('/');

    }

    public function show($id){
        return view('study.show');
    }
}
