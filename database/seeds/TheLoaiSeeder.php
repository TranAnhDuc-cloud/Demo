<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TheLoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('theloai')->insert([
            ['TenTheLoai'=>'Xã Hội','ThuTu'=>'1','AnHien'=>'1'],
            ['TenTheLoai'=>'Giáo Dục','ThuTu'=>'2','AnHien'=>'1'],
            ['TenTheLoai'=>'Việc Lam','ThuTu'=>'3','AnHien'=>'1'],
            ['TenTheLoai'=>'Bóng Đá','ThuTu'=>'4','AnHien'=>'1'],
            ['TenTheLoai'=>'Âm Nhạc','ThuTu'=>'5','AnHien'=>'1'],
        ]);
    }
}
