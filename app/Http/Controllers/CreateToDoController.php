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

           $notes = ToDo::all();

            return view('display')->with('notes',$notes);

        }

    public function destroy($id)
    {
        $employee = ToDo::find($id);
        $employee->delete();
        echo"delete has been called";
        return view('create');

    }

}
