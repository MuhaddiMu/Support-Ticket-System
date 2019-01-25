<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Index(){
        return view('Home');
    }

    public function IndexName($Name){
        return view('welcomeName')->with('Name', $Name);
    }

    public function Services(){
        $Services = array(
            'Services' => ['NodeJS', 'PHP', 'Cyber Security', 'Penetration Testing']
        );
        return view('Services')->with($Services);
    }
}
