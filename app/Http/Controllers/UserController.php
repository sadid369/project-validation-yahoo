<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function addUser(Request $req)
    // {   
    //     $req->validate([
    //         "username"=>'required',
    //         "useremail"=>'required|email',
    //         // "userage"=>'required | numeric | min:18 | max:65',
    //         "userage"=>'required | numeric |min:18',
    //         // "userpassword"=>'required | alpha_num |min:6',
    //         "userpassword"=>'required | min:6',
    //         "usercity"=>'required'
    //     ], [
    //         "username.required"=>'নাম দিতে হবে',
    //          "userpassword.min"=>"পাসওয়ার্ড অবশ্যই ছয় অক্ষরের বেশি হতে হবে",
    //          "userage.min"=>"'বয়স আঠারো বছর হতে হবে'"

    //     ]);
    //     return $req->all();
    // }
    public function addUser(UserRequest $req)
    {   
        
        return $req->all();
        // return $req->only(['username','usercity']);
        // return $req->except(['username','usercity']);
    }
}
