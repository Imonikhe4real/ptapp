<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CssController extends Controller
{
    public function index()
    {
       return view('cssfile');
    }
}
