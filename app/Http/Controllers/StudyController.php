<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use App\Language;
use App\User;
use App\StudyLanguage;
use cebe\markdown\Markdown as Markdown;
use Illuminate\Support\Facades\Auth;

class StudyController extends Controller
{

    public function index(Request $request){
        $studies = Study::orderBy('id','DESC')->take(10)->get();
        return view('study.index',['studies'=>$studies]);
        // return $studies;
    }

    public function create(Request $request){
        $array_h = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
        $array_m = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');
        // $languages = StudyLanguage::where('')
        $user = Auth::user();
        $languages = $user->languages;



        return view('study.create',['array_h'=>$array_h,'array_m'=>$array_m,'user'=>$user,'languages'=>$languages]);
        // return ($languages);
    }

    public function store(Request $request){

        $study = new Study;
        $study->keyword = $request->keyword;
        $study->time_start = $request->study_start;
        $study->time_end = $request->study_end;

        $time_start_minutes = (int)substr($request->study_start,0,2)*60 + (int)substr($request->study_start,2,4);
        $time_end_minutes = (int)substr($request->study_end,0,2)*60 + (int)substr($request->study_end,2,4);
        $time_dif = $time_end_minutes - $time_start_minutes;
        if($time_dif>=0){
            $study->minutes = $time_dif;
        }else{
            $study->minutes = $time_dif+1440;
        }
        $study->memo = $request->memo;
        $study->language_id = Language::where('name',$request->language)->first()->id;
        $study->user_id = $request->user_id;
        $study->save();
        return redirect('/');

    }

    public function show($id){
        $study = Study::find($id);
        $language = Language::find($study->language_id);
        $time_start = $study->time_start;
        $time_start_minutes = (int)substr($time_start,0,2)*60 + (int)substr($time_start,2,4);
        $time_end = $study->time_end;
        $time_end_minutes = (int)substr($time_end,0,2)*60 + (int)substr($time_end,2,4);
        $time_dif = $time_end_minutes - $time_start_minutes;
        if($time_dif>=0){
            $time_hour = intdiv($time_dif,60);
            $time_minute = $time_dif%60;
        }else{
            $time_dif+=1440;
            $time_hour = intdiv($time_dif,60);
            $time_minute = $time_dif%60;
        }

        return view('study.show',['study'=>$study,'time_hour'=>$time_hour,'time_minute'=>$time_minute,'language'=>$language]);
        // return ($language);
    }

    public function edit(Request $request){
        $study = Study::find($request->id);
        $languages = User::find($study->user_id)->languages;
        $time_start = $study->time_start;
        $time_end = $study->time_end;
        $start_h = substr($time_start,0,2);
        $start_m = substr($time_start,2,4);
        $end_h = substr($time_end,0,2);
        $end_m = substr($time_end,2,4);

        $array_h = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');
        $array_m = array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52','53','54','55','56','57','58','59');

        // return ($study->memo);
        return view('study.edit',['study'=>$study,'start_h'=>$start_h,'start_m'=>$start_m,'array_h'=>$array_h,'array_m'=>$array_m,'end_h'=>$end_h,'end_m'=>$end_m,'languages'=>$languages]);
    }

    public function update(Request $request,$id){
        $lan = new Language;
        $lan->name = $request->language;
        $lan->user_id = $request->user_id;
        $lan->save();
        $study = Study::find($id);
        $languages =
        $study->keyword = $request->keyword;
        $study->time_start = $request->study_start;
        $study->time_end = $request->study_end;
        $study->memo = $request->memo;
        $study->language_id = Language::where('name',$request->language)->first()->id;
        $study->save();
        return redirect('/');
    }

    public function getStudy(){
        $user = Auth::user();
        $studies = $user->studies;
        return ([$user,$studies]);
        // return ([$studies]);
        // return ($studies);
    }

    public function lanStore(Request $request){
        $user = Auth::user();
        $languages = $user->languages;
        $response = 'new';
        foreach($languages as $lan){
            if($lan->lower_name === $request->lower_language){
                $response = 'exits';
            }
        }

        if($response === 'exits'){
            $response = 'already exits';
        }else{
            $language = new Language;
            $language->name = $request->language;
            $language->lower_name = $request->lower_language;
            $language->user_id = $user->id;
            $language->save();
            $response = 'add language';
        }
        return ($response);
    }
}
