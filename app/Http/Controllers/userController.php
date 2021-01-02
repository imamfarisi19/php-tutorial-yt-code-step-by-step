<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function formSubmit(Request $req)
    {
        print_r($req->input('user'));
        print_r($req->input('email'));
    }
}
