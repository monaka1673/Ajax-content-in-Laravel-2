<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    // 閲覧画面を表示
    public function index(Request $request,$questionId){
        // $questionInfo = Question::where('id',$questionId)->first();
        // return view('/admin/result',[
        //     'questionId' => $questionId,
        //     'questionInfo' => $questionInfo
        // ]);
        return view('/admin/result',[
            'questionId' => $questionId
        ]);
    }
}
