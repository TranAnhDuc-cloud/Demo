<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Schema;

/*  @ Lấy dữ liệu từ route về controller bằng request
    @ Xuất dữ liệu từ controller ra view bằng response
 */
class MyController extends Controller
{   
    //Call Controller
    public function Hello(){
        return "Chào Bạn";
    }
    //Truyền dữ liệu cho Controller
    public function XinChao($name,$namsinh){
        return " Chao ban : ".$name;
        echo "Sinh Nam : " .$namsinh;
    }
    public function TamBiet($name,$namsinh){
        return "Goob bye ban : ".$name;
        echo "Sinh Nam : " .$namsinh;
    }
    public function ThamSo($ten){
        return "Ten ban la : ".$ten;
    }
    public function HoTen($ten,$namsinh){
        return "Ten : ".$ten ."</br>"."Sinh Nam : ".$namsinh;
    }
    //URL
    public function GetURL(Request $request){
        return $request->url();
        if($request->isMethod('post')){
            echo "Có Phương Thức Post";
        }else{
            echo "Không Có Phương Thức Post";
        }
        if($request->is('Admin')){
            echo "Có Admin";
        }else{
            echo "Không Có Admin";
        }
    }
    //Gửi nhận tham số trên Request
    public function postForm(Request $request){
        echo "Ten Ban La : " .$request->input('HoTen');
        echo "Tuoi Ban La : " .$request->input("Tuoi");
    }
    //Call views bằng controller
    public function Abc($usename,$password){
        //return view('admin.pages.Login',['usename'=>$usename,'password'=>$password]);

        // return view('admin.pages.Abc',compact('usename','password'));
        return view('admin.pages.Register');
    }
    public function Login(){
        return view('admin.pages.Login');
    }
    public function postLogin(Request $request){
       if($request->input('username') == ''){
            echo 'Chưa Nhập Tên Đăng Nhập';
       }else{
           if($request->input('password')==''){
                echo 'Chưa Nhập Mật Khẩu';
           }else{
               if($request->input('username')=='admin' && $request->input('password')=='admin'){
                    echo "Đăng Nhập Thành Công";
                    return view('Home');
               }
           }
       }
    }
    public function Register(){
        return view('admin.pages.Register');
    }
    //set Cookie
    public function setCookie(){
        $response = new Response();
        $response->withCookie('AnhDuc','Blog Laravel',0.1);
        echo "Đã setCookie";
        return $response;
    }
    public function getCookie(Request $request){
        echo "Cookie của bạn là : ";
        return $request->cookie('AnhDuc');
    }
    //Upload File
    public function postFile(Request $request){
        //Kiểm tra myfile ở form có tồn tại hay k
        if($request->hasFile('myfile')){

            //request giá trị file về
            $file = $request->file("myfile");

            //Ktra đuôi file
            if($file->getClientOriginalExtension("myfile") == "jpg"){

                //lấy tên file
            $filename =$file->getClientOriginalName('myfile');

                //Ktra upload file có thành công hay k
                if($file->isValid('myfile')){
                     //lưu file vào thư mục images
                    $file ->move('images',$filename);
                    echo "Đã upload file ".$filename ." thành công";
                }else{
                    echo "Upload file thất bại";
                }
            }else{
                echo "Không được phép upload file khác định dạng jpg";
            }

        }else{
            echo "Chưa có file";
        }
    }

    public function getJson(){
        $arr = ["Question"=>"1+1","A"=>"2","B"=>"3","C"=>"4"];
        return response()->json($arr);
    }
    public function Blade($str){
         $tllt = "<b>Theloai - loaitin</b>";
        if($str == "Loaitin"){
            // return view('admin.pages.loaitin');
            return view('admin.pages.loaitin',['tllt'=>$tllt]);
        }elseif($str == "Theloai"){
            // return view('admin.pages.theloai');
            return view('admin.pages.theloai',['tllt'=>$tllt]);
        }else{
           return redirect()->route('Admin');
        }
    }

    // Admin
    public function indexAdmin(){
        return view('admin.pages.home');
    }
    public function TheLoai(){
        $tllt = "<b>Theloai - loaitin</b>";
        return view('admin.pages.loaitin',['tllt'=>$tllt]);
    }
    public function LoaiTin(){
        $tllt = "<b>Theloai - loaitin</b>";
        return view('admin.pages.theloai',['tllt'=>$tllt]);
    }

    // User
    public function indexUser(){
        return view('user.pages.home');
    }
    public function LienHe(){
        return view('user.pages.lienhe');    
    }

    // Database
    // Tao Table
    public function TaoDB(){
        Schema::create('loaisanpham',function($table){
            $table->increments('id');
            $table->string('ten',200);
        });

        Schema::create('theloai',function($table){
            $table->increments('id');
            $table->string('tentheloai',200)->nullable();//nullable là cho phép giá trị null
            $table->string('tacgia',200)->default("Nha Sn Xuat");//defalt là mặc định giá trị

        });
        echo "Đã thực hiện tạo bảng thành công";
    }

    // Tạo Table có khóa phụ
    public function SanPham(){
        Schema::create('sanpham',function($table){
            $table->increments('id');
            $table->string('ten');
            $table->float('gia');
            $table->integer('soluong');
            $table->integer('id_loaisanpham')->unsigned();
            $table->foreign('id_loaisanpham')->references('id')->on('loaisanpham');
        });
        echo "Đã tạo bảng sản phẩm có liên kết khóa phụ";
    }

    // Sua Table
    public function XoaCollum(){
        // Xoa 1 Cot Trong Table
        Schema::table('theloai',function($table){
            $table->dropColumn('tacgia');
        });
        echo "Đã xóa cột tacgia trong table the loai thanh cong";
    }
    public function ThemCollum(){
        // Thêm 1 cột trong table
        Schema::table('theloai',function($table){
            $table->string('email');
        });
        echo "Đã thêm cột Email vào table the loai";
    }
    
    public function DoiTen(){
        // Đổi tên tabble
        Schema::rename('theloai','hoadon');
        echo "Đã đôi tên table thể loại thành hóa đơn thành công";
    }

    public function XoaTable(){
        // Xóa table có kiểm tra table tồn tại thì mới xóa
        Schema::dropIfExists('hoadon');
        echo "Đã xóa table hoa don thành công";
    }
    public function TaoTable(){
        Schema::create('hoadon',function($table){
            $table->increments('id');
            $table->float('gia');
            $table->integer('soluong');
            $table->float('thanhtien');
        });
        echo "Đã tạo bang hoa don thanh cong";
    }

    
    
}
