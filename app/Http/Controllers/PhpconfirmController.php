<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class PhpconfirmController extends Controller
{
    public function index()
    {
        return view('phpconfirm');
    }
    public function store(Request $request)
     {
         $fullname = $request->input('fullname');
         $answer1 = $request->input('answer1');
         $answer2 = $request->input('answer2');
         $answer3 = $request->input('answer3');
         $answer4 = $request->input('answer4');
         $answer5 = $request->input('answer5');
         $answer6 = $request->input('answer6');
         $answer7 = $request->input('answer7');
         $answer8 = $request->input('answer8');
         $answer9 = $request->input('answer9');
         $answer10 = $request->input('answer10');
 
         $sql = array("fullname"=>$fullname,"answer1" => $answer1,"answer2"=>$answer2,"answer3"=>$answer3,"answer4"=>$answer4,"answer5"=>$answer5,"answer6"=>$answer6,"answer7"=>$answer7,"answer8"=>$answer8,"answer9"=>$answer9,"answer10"=>$answer10);
         DB::table('phps')->insert($sql);
 
         return redirect('phpconfirm')->with(array(
              'fullname' => $fullname,
              'answer1' => $answer1,
              'answer2' => $answer2,
              'answer3' => $answer3,
              'answer4' => $answer4,
              'answer5' => $answer5,
              'answer6' => $answer6,
              'answer7' => $answer7,
              'answer8' => $answer8,
              'answer9' => $answer9,
              'answer10' => $answer10,
         ));
   } 
}
