<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class CreateToDoController extends Controller
{
        public function store()
        {
           $title =  request('title');
          $message =   request('message');
           $time = request('dob');


           $onetodo = new ToDo();
           $onetodo -> title =  $title;
           $onetodo -> message = $message;
           $onetodo -> date = $time;


           $onetodo -> save();
           echo "Details entered " . $onetodo -> todo_id;
            return view('display')->with('onetodo',$onetodo);

        }
}
