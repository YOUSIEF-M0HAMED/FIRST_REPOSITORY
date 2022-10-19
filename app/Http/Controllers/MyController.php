<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function welcome(){

     return view("2hlan");
    }

    public function info($name,$adge,$phone){

        return view("info")->with("name",$name)->with("adge",$adge)->with("phone",$phone);

        //["name"=>"$name","adge"=>"$adge","phone"=>"$phone"];

    }


}
