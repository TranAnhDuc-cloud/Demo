<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditTheLoaiController extends Controller
{
    // // THELOAI
    public function getTheLoai(){
        return view('admin.pages.theloai');
    }
}
