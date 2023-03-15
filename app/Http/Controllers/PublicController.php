<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){

        return view('public.home');

    }
    public function resume(){
        return view('public.resume');
        
    }
    public function jobs(){
        return view('public.jobs');
        
    }
    public function blog(){
        return view('public.blog');
        
    }
    public function contact(){
        return view('public.contact');
        
    }
}
