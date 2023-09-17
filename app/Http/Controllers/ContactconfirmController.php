<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ContactconfirmController extends Controller
{
    public function index()
    {
       return view('contactconfirm');
    }
    public function store(Request $request)
     {

      $fullname = $request->input('fullname');
      $email = $request->input('email');
      $phone = $request->input('phone');
      $message = $request->input('message');
 
      $sql = array("fullname"=>$fullname,"email"=>$email,"phone"=>$phone,"message"=>$message);
      DB::table('contacts')->insert($sql);

        return redirect('/contactconfirm')->with('success','Message Sent Successfully');
         
   } 
}
