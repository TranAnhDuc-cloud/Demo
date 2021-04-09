<?php

use App\Http\Controllers\MyController;
use App\User;
use Facade\FlareClient\Views;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// php artisan serve
// http://localhost:8000

// Route::get('/', function () {
//     return view('Home');
// });

//Tạo Route 
Route::get('Laravel',function(){
    return "xin chào laravel";
});

//Truyền Tham Số Vào Route
Route::get('SanPham/{sanpham}',function($sanpham){
    return "Ten san pham la ". $sanpham;
});

Route::get('NgayThang/{ngay}/{thang}/{nam}',function($ngay,$thang,$nam){
    echo "Ngay Thang La : " .$ngay.'/'.$thang.'/'.$nam;
})->where(['ngay'=>'[0-9]+']);
// ->where(['hoten'=>'[a-zA-Z]+'])
// [0-9a-zA-Z]+
// [0-9a-zA-Z]{5}

Route::get('HoVaTen/{hoten}',function($hoten){
    echo "Ho Va Ten : " .$hoten;
});

// Định danh route , Lưu Tên Route Để Gọi Lại
Route::get('Route1',['as'=>'Route1',function(){
    echo "Hi Laravel/Route1";
}]);
Route::get('Route3',function(){
    return "Hi Route3";
})->name('Route3');

// Gọi Tên Route (Chuyển Hướng Route)
Route::get('Route2',function(){
    return redirect()->route('Route3');
});

Route::get('user/{id}',function($id){
    return "ID của bạn là : " . $id;
})->name('User');
// $user = route('User');


//Group Route
Route::group(['prefix'=>'MyGroup'],function(){
    //Domain/MyGroup/User1
    Route::get('User1',function(){
        return "Chào User1";
    });
    Route::get('User2',function(){
        return "Chào User2";
    });
    Route::get('User3',function(){
        return "Chào User3";
    });
});



// Call Controller
Route::get('CallController','MyController@Hello');

// Truyền dữ liệu cho controller
Route::get('Thamso/{ten}','MyController@ThamSo');
Route::get('HoTen/{ten}/{namsinh}','MyController@HoTen')->where(['ten'=>'[a-zA-Z]+'])->where(['namsinh'=>'[0-9]+'])->name('HoTen');
Route::get('Xinchao/{name}/{namsinh}','MyController@getXinChao')->name('Xinchao');
Route::get('Tambiet/{name}/{namsinh}','MyController@getTamBiet')->name('Tambiet');
//URL
Route::get('MyRequest','MyController@GetURL');

// Gửi và nhận dữ liệu với request
Route::get('getForm',function(){
    return view('postForm');
});
Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']); 

//Call Views bằng controller
Route::get('Abc/{username}/{password}','Mycontroller@Abc')->name('Abc');


Route::get('Login1',['as'=>'Login','uses'=>'Mycontroller@Login1']);
Route::post('postLogin',['as'=>'postLogin','uses'=>'Mycontroller@postLogin']);

//Dùng chung dữ liệu trên Views
View::share('Name',"Đây là views đã đc share");

//Set Cookie
Route::get('setCookie','MyController@setCookie')->name('setCookie');
Route::get('getCookie','Mycontroller@getCookie')->name('getCookie');

//Upload File
Route::get('getFile',function(){
    return view('postFile');
})->name('getFile');
Route::post('postFile',['as'=>'postFile','uses'=>'Mycontroller@postFile']);

//JSON
Route::get('getJson','Mycontroller@getJson');

//Admin Blade Template
Route::get('Blade/{str}','Mycontroller@Blade');
Route::get('Loaitin','Mycontroller@LoaiTin')->name('LoaiTin');
Route::get('Theloai','Mycontroller@TheLoai')->name('TheLoai');


// User Blade Template
Route::get('Lienhe','Mycontroller@LienHe')->name('Lienhe');
Route::get('User','Mycontroller@indexUser')->name('User');


//Làm Việc Với Database
// Tạo Table
Route::get('Database','Mycontroller@TaoDB')->name('Database');
Route::get('HoaDon','Mycontroller@TaoTable')->name('HoaDon');

// Tạo Table có khóa phụ
Route::get('SanPham','Mycontroller@SanPham')->name('SanPham');

// Xóa 1 cột trong table
Route::get('XoaCollum','Mycontroller@XoaCollum')->name('XoaCollum');

// Thêm 1 cột trong table
Route::get('ThemCollum','Mycontroller@ThemCollum')->name('ThemCollum');

// Đổi tên table
Route::get('DoiTen','Mycontroller@DoiTen')->name('DoiTen');

// Xóa table
Route::get('XoaTable','Mycontroller@XoaTable')->name('XoaTable');

Route::get('Schema/create-table','Mycontroller@create_table');

// QueryBuild
Route::group(['prefix'=>'Query'],function(){
    //Domain/MyGroup/Get
    Route::get('Get','Mycontroller@Query');

    Route::get('Where','Mycontroller@Query1');

    Route::get('Select','Mycontroller@Query2');
    
    Route::get('Raw','Mycontroller@Query3');

    Route::get('Orderby','Mycontroller@Query4');

    Route::get('Skip','Mycontroller@Query5');

    Route::get('Count','Mycontroller@Query6');
    
    Route::get('Update','Mycontroller@Query7');

    Route::get('Delete','Mycontroller@Query8');

    Route::get('Insert','Mycontroller@Query9');

    Route::get('Truncate','Mycontroller@Query10');

    Route::get('Model','Mycontroller@CallModel');
});


// Home
Route::get('/','MenuController@index')->name('home');
Route::get('/home','MenuController@index');
Route::get('/Home','MenuController@index');
// Admin
Route::get('Admin','AdminController@index')->name('Admin');
// EDIT USER
Route::get('getUser',['as'=>'getUser','uses'=>'EditUserController@getUser']);
// ADD
Route::get('addUser',['as'=>'addUser','uses'=>'EditUserController@addUser']);
Route::post('xulyAddUser',['as'=>'xulyAddUser','uses'=>'EditUserController@xulyAddUser']);
// EDIT
Route::get('editUser/{id}',['as'=>'editUser','uses'=>'EditUserController@editUser']);
Route::post('Update/{id}',['as'=>'xulyeditUser','uses'=>'EditUserController@update']);
// DELETE
Route::get('deleteUser/{id}',['as'=>'deleteUser','uses'=>'EditUserController@deleteUser']);
// Route::post('xulydeleteUser/{id}',['as'=>'xulydeleteUser','uses'=>'EditUserController@xulydeleteUser']);

// Route::group(['prefix'=>'Admin'],function(){
//     Route::group(['prefix'=>'User'],function(){
//         Route::get('getUser',['as'=>'getUser','uses'=>'EditUserController@getUser']);
//         // ADD
//         Route::get('addUser',['as'=>'addUser','uses'=>'EditUserController@addUser']);
//         Route::post('xulyAddUser',['as'=>'xulyAddUser','uses'=>'EditUserController@xulyAddUser']);
//         // DELETE
//         Route::get('deleteUser/{id}',['as'=>'deleteUser','uses'=>'EditUserController@deleteUser']);
//         Route::post('xulydeleteUser/{id}',['as'=>'xulydeleteUser','uses'=>'EditUserController@xulydeleteUser']);

//         // 
//         Route::get('editUser',['as'=>'editUser','uses'=>'EditUserController@editUser']);
//     });
// });

// EDIT THELOAI
Route::get('TheLoai',['as'=>'theloai','uses'=>'EditTheLoaiController@getTheLoai']);

// EDIT LOAITIN
Route::get('LoaiTin',['as'=>'loaitin','uses'=>'EditLoaiTinController@getLoaiTin']);

// EDIT TIN
Route::get('Tin',['as'=>'tin','uses'=>'EditTinController@getTin']);

// EDIT CHUYENMUC
Route::get('ChuyenMuc',['as'=>'chuyenmuc','uses'=>'EditChuyenMucController@getChuyenMuc']);

// AUTHEN CONTROLLER
// REGISTER
Route::get('Register',['as'=>'Register','uses'=>'RegisterController@Register']);
Route::post('Register',['as'=>'xulyRegister','uses'=>'RegisterController@xulyRegister']);
// LOGIN
Route::get('Login',['as'=>'Login','uses'=>'LoginController@Login']);
Route::post('Login',['as'=>'xulyLogin','uses'=>'LoginController@xulyLogin']);
// LOGOUT
Route::get('Logout',['as'=>'Logout','uses'=>'LogoutController@Logout']);
// Account
Route::get('Account',['as'=>'Account','uses'=>'AccountController@Account']);



