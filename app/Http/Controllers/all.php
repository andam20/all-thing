<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class all extends Controller
{
    public function getting(){
 
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        // dd($response);
         //return Http::dd()->get('https://jsonplaceholder.typicode.com/posts');
        
         return view('get',compact('response'));
            }
}
