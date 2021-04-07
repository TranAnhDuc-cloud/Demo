<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function xulyLogin(Request $request){
        // Lấy dữ liệu nhập vào
        $username = $request['username'];
        $password = $request['password'];
        $thongbao = '<h1>Đăng Nhập Thất Bại</h1>';
        // Kiểm tra đăng nhập
        if(Auth::attempt(['name'=>$username,'password'=>$password])){
            return view('Home');
        }else{
            return view('user.pages.login',['thongbao'=>$thongbao]);
        }
    }
    public function login(){
        $thongbao = '';
        return view('user.pages.login',['thongbao'=>$thongbao]);
    }
    public function xulyRegister(Request $request){
        
    }
    public function Register(){
        return view('user.pages.register');
    }
}
