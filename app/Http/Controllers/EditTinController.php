<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditTinController extends Controller
{
    //
     // TIN
     public function getTin(){
        return view('admin.pages.tin');
    }
}
