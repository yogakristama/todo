<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    function index(){
        $count = session ('count');
        if($count){
            $count = $count +1;

        } else {
            $count=1;
        }

        //set session
        session(['count'=>$count]);

        return session('count');
    }
 
    function  reset(){
        session(['count' => 0]);
        return "session reset";
    }
}
