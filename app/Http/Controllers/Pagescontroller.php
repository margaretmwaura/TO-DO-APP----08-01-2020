<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    //
    public function index()
    {
        return view('create');
    }

}
