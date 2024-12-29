<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function contact(){
        return view('frontEnd.home.contact');
    }
}
