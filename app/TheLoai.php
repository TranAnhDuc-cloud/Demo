<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    // Đổi tên bảng
    protected $table = 'my_theloai';
    // kết nối tới 1 table trong CSDL nào đó
    protected $connection = 'laravel';

    


}
