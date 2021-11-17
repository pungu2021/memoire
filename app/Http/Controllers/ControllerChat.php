<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerChat extends Controller
{
     function chat(){
         return view("chat");
     }
}
