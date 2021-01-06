<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function formSubmit(Request $req)
    {
        $result = $req->input();	
		$hsl='';
		$hsl = $hsl.implode($result);
		echo $hsl;
    }
}	
