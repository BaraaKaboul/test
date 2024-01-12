<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($id){

        if (view()->exists($id)){
            return view($id);
        }
        else
            return view('404');
    }
}
