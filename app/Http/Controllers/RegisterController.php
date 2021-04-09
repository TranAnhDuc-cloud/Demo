<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //
    protected function create(array $data){
        return User::create([
            'name' =>$data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'level' => '2',
        ]);
    }
    // protected function validator(array $data){
    //     return Validator::make($data,
    //         [
    //             'name' => 'required|string|max:255',
    //             'email' => 'required|string|email|max:255|unique:users',
    //             'password' => 'required|string|min:6|confirmed',
    //         ],
    //         [
    //             'name.required' => 'Họ và tên là trường bắt buộc',
    //             'name.max' => 'Họ và tên không quá 255 ký tự',
    //             'email.required' => 'Email là trường bắt buộc',
    //             'email.email' => 'Email không đúng định dạng',
    //             'email.max' => 'Email không quá 255 ký tự',
    //             'email.unique' => 'Email đã tồn tại',
    //             'password.required' => 'Mật khẩu là trường bắt buộc',
    //             'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
    //             'password.confirmed' => 'Xác nhận mật khẩu không đúng',
    //         ]
    //     );
    // }
    public function Register(){
        return view('user.pages.register');
    }
    public function xulyRegister(Request $request){
        $allRequest = $request->all();
        // $validator = $this->validator($allRequest);
        //     if ($validator->fails()) {
        //         // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
        //         return redirect('Register')->withErrors($validator)->withInput();
        //     } else {
            if($this->create($allRequest)){
                // insert thành công thì thông báo
                Session::flash('success','Đăng Ký Thành Công');
                return redirect('Register');
            }else{
                // insert thất bại thì thông báo
                Session::flash('error','Đăng Ký Thất Bại');
                return redirect('Register');
            }
        // }
    }
}
