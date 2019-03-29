<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class youtube extends Controller
{
    //
  public function index(Request $request)
{
   $request->validate([
    'user' => 'required|email',
    'password' => 'min:3|max:5'
   ]);
   print_r($request->input());
}

}
