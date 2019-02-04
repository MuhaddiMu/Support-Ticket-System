<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function Services(){
        $Services = array(
            'Services' => ['NodeJS', 'PHP', 'Cyber Security', 'Penetration Testing']
        );
        return view('Services')->with($Services);
    }
}
