<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditChuyenMucController extends Controller
{
    //
    // CHUYEN MỤC
    public function getChuyenMuc(){
        return view('admin.pages.chuyenmuc');
    }
}
