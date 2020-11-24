<?php

namespace App\Http\Controllers;

use App\Models\useremail;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function index(){
        return view("index");
    }
    function useremail(Request $req){
        $validation=$req->validate([
            "username"=>"required",
            "useremail"=>"required"
        ]);
        if($validation){
            $useremail=new useremail();
            $useremail->username=$req->username;
            $useremail->useremail=$req->useremail;
            $useremail->save();
            return back()->with("success","Your email was successful.");
        }else{
            return back()->withErrors($validation);
        }
    }
    function Bible(){
        return view("Bible");
    }
    function Book(){
        return view("Book");
    }
    function About(){
        return view("About");
    }
    function EmailReg(){
        return view("Registered");
    }
}
