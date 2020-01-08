<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateToDoController extends Controller
{
        public function store()
        {
           $title =  request('title');
          $message =   request('message');
           $time = request('dob');

           echo "Details entered " . $title . " " . $message . " " . $time;

        }
}
