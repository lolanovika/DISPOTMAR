<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Satkercontroller extends Controller
{
    public function index()
   {
       return view('admin.satker');
   }
   public function create(Request $request){
    
   }
}
