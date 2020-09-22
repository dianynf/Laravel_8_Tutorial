<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $name = 'dianbugas';
        return view('user', compact('name'));
    }
}
