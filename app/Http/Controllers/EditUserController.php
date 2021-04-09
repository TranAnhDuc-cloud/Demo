<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class EditUserController extends Controller
{
    //// USER
    public function getUser(){
        $data = DB::table('users')->select(['id','name','email','level'])->get();
        $count = $data->count();
        return view('admin.pages.user',['data'=>$data],['count'=>$count]);
    }
    public function addUser(){
        return view('admin.pages.addUser');
    }
    protected function create(array $data){
        return User::create([
            'name' =>$data['username'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'level' => $data['level'],
        ]);
    }
    protected function validator(array $data){
        return Validator::make($data,
            [
                'name' => 'required|string|max:255',
                'password' => 'required|string|min:6|confirmed',
                'email' => 'required|string|email|max:255|unique:users',
            ],
            [
                'name.required' => 'Họ và tên là trường bắt buộc',
                'name.max' => 'Họ và tên không quá 255 ký tự',
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'email.max' => 'Email không quá 255 ký tự',
                'email.unique' => 'Email đã tồn tại',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
                'password.confirmed' => 'Xác nhận mật khẩu không đúng',
            ]
        );
    }
    public function xulyAddUser(Request $request){
        $allRequest = $request->all();
        $validator = $this->validator($allRequest);
        $success = 'Thêm User Thành Công';
        $error = 'Thêm User Thất Bại';
        // if ($validator->fails()) {
        //     // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
        //     return redirect('addUser')->withErrors($validator)->withInput();
        // }else{
            if($this->create($allRequest)){
                // insert thành công thì thông báo
                Session::flash('success',$success);
                return redirect('addUser');
            }else{
                // insert thất bại thì thông báo
                Session::flash('error',$error);
                return redirect('addUser');
            }
        // }
    }
    
    // EDIT
    public function editUser($id){
        $user = User::find($id);
        return view('admin.pages.editUser',['user'=>$user]);
    }
    public function update(Request $request,$id){
        // $user = User::find($id);
        // $user = User::table('users')->where('id',$id)->update(['name'=>$request['username'],'emai'=>$request['email'],'level'=>$request['level']]);
        // $user->save();
        // $this->validate($request,['username'=>'required|unique:users,name|mid:5|max:100'],['username.required'=>'Bạn Chưa Nhập Username','username.unique'=>'Username Đã Tồn Tại','username.min'=>'Username Phải Có Độ Dài Từ 5 Đến 100 Ký Tự','username.max'=>'Username Phải Có Độ Dài Từ 5 Đến 100 Ký Tự']);
        // // $user->name = $request->username;
        // $user->email = $request->email;
        // return redirect()->route('getUser')->with('thongbao','Sửa Thành Công');

        $news = User::find($id);
        $news->name = $request->username;
        $news->email = $request->email;
        $news->level = $request->level;
        $news->update();
        return redirect()->route('getUser')->with('thongbao','Bạn Đã Sửa Thành Công');
    }

    // DELETE
    public function deleteUser($id){
        // $user = User::find($id);
        $user =User::where('id',$id)->first();
        // return view('admin.pages.user',['user'=>$user]);
        if ($user != null) {
            $user->delete();
            return redirect()->route('getUser')->with('thongbao','Bạn Đã Xóa Thành Công');
        }
        return redirect()->route('getUser')->with(['thongbao'=> 'Wrong ID!!']);
    }
       

}
