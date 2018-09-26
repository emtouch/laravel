<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DasboardController extends Controller
{
   public function index(){

   //	die('aa');
   	return view('admin/dasboard/dasboard');
   	//return view('test');
   }
}

   	
   	
  