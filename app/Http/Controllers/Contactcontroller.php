<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    function Contact(){
        return view("Contact");
    }
    function usercontact(Request $req){
        $validation=$req->validate([
            "username"=>"required",
            "useremail"=>"required",
            "userphone"=>"required",
            "usermessage"=>"required",
        ]);
        if($validation){
            return back()->with("consuccess","Success! I will get back to you soon.");

        }else{
            return back()->withErrors($validation);
        }
        
    }
}
