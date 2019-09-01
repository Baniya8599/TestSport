<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PractiseController extends Controller
{
    public function practise(){
        return view('/practises/js');
    }
}
