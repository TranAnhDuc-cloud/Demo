<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class MagazineController extends Controller
{
    public function Query3(){
        // Lấy các trường id name email va doi ten name thanh usernam khi in ra bảng user có cột id = 2
        $data = DB::table('users')->select([DB::raw('id,name as username,email')])->where('id',2)->get();
        
        foreach($data as $row){
            foreach($row as $key=>$value){
                echo $key.' : '.$value;
                echo "</br>";
            }
            echo "<hr>";
        }
    }
}
