<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cowsayphp\Farm;
use Cowsayphp\Farm\cow;
use Cowsayphp\Farm\dragon;
use Cowsayphp\Farm\whale;
use Cowsayphp\Farm\tux;
use Illuminate\Foundation\Inspiring;


class Say extends Controller
{
    public function cow(Request $request){
        $farm = Farm::create(cow::class);
        return view('talking_animal',[
            'talking_animal' => $farm->say($request->query("quote","..."))
        ]);
    }

    public function dragon(Request $request){
        $farm = Farm::create(dragon::class);
        return view('talking_animal',[
            'talking_animal' => $farm->say($request->query("quote","..."))
        ]);
    }

    public function whale(Request $request){
        $farm = Farm::create(whale::class);
        return view('talking_animal',[
            'talking_animal' => $farm->say($request->query("quote","..."))
        ]);
    }

    public function tux(Request $request){
        $farm = Farm::create(tux::class);
        return view('talking_animal',[
            'talking_animal' => $farm->say($request->query("quote","..."))
        ]);
    }
}
