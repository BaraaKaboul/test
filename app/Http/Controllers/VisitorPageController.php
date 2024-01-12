<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorPageController extends Controller
{
    public function index(){

        return view('visitorPage');
    }
}
