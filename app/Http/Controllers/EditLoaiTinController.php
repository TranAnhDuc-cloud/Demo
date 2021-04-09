<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditLoaiTinController extends Controller
{
    //
    // LOAITIN
    public function getLoaiTin(){
        return view('admin.pages.loaitin');
    }
}
