<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;

use cebe\markdown\Markdown as Markdown;

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
        $study = Study::find($id);
        $time = (int)$study->time_end - (int)$study->time_start;
        $hour = intdiv($time,60);
        $minute = $time%60;
        $parser = new Markdown();
        $mark_memo = $parser->parse($study->memo);

        return view('study.show',['study'=>$study,'hour'=>$hour,'minute'=>$minute,'mark_memo'=>$mark_memo]);
        // return ($mark_memo);
    }

    public function edit($id){
        $study = Study::find($id);
        $time_start = $study->time_start;
        $time_end = $study->time_end;
        $start_h = substr($time_start,0,2);
        $start_m = substr($time_start,2,4);
        $end_h = substr($time_end,0,2);
        $end_m = substr($time_end,2,4);


        $array_h = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
        $array_m = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');


        return view('study.edit',['study'=>$study,'start_h'=>$start_h,'start_m'=>$start_m,'array_h'=>$array_h,'array_m'=>$array_m,'end_h'=>$end_h,'end_m'=>$end_m]);
        // return ($start_h);
    }
}
