<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('welcome');
    }

    public function IndexName($Name){
        return view('welcomeName')->with('Name', $Name);
    }
}
