<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class MessageController extends Controller
{
    //public function store(Request $request  )
    public function store()
    {
      //  return $request;
     // return $request-> get('mail');
        //return request('mail');

        request()-> validate([
            'name'=> 'required',
            'mail'=> 'required|email',
           
        ]); 

        return 'FORMULARIO VALIDADO ';
    }
}
