<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{
    // Kiểm tra đăng nhập nếu chưa đăng nhập thì hệ thống sẽ chuyển qua đăng nhập
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){
        $theloai = DB::table('theloai')->select('TenTheLoai','idTL')->get();
        $loaitin = DB::table('loaitin')->select('TenLoaiTin','idTL')->get();
        return view('user.pages.home')->with(['theloai' => $theloai,'loaitin' => $loaitin]);
        // ĐĐ 37 - 40
        // 41 - 40
        // 041  30-30-34
        // Lô : 41=202
       
    }
}
