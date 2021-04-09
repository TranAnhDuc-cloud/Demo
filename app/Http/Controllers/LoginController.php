<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\MenuController;
class LoginController extends Controller
{
    //
    public function Login(){
        return view('user.pages.login');
    }
    public function xulyLogin(Request $request){
        $username = $request['username'];
        $password = $request['password'];
        if(Auth::attempt(['name'=>$username,'password'=>$password])){
            // Kiểm tra đúng tk mk -> chuyển trang
            return redirect('home');
        }else{
            // Không đúng thì thông báo lỗi
            Session::flash('error','Tài Khoản hoặc mật khẩu không đúng');
            return redirect('Login');
        }
    }
}
