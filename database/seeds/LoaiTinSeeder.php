<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LoaiTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('loaitin')->insert([
            ['TenLoaiTin'=>'Pháp Luật','ThuTu'=>'1','AnHien'=>'1','idTL'=>'1'],
            ['TenLoaiTin'=>'Văn Hóa','ThuTu'=>'2','AnHien'=>'1','idTL'=>'1'],
            ['TenLoaiTin'=>'Tìm Việc','ThuTu'=>'3','AnHien'=>'1','idTL'=>'3'],
            ['TenLoaiTin'=>'Trường Học','ThuTu'=>'4','AnHien'=>'1','idTL'=>'2'],
            ['TenLoaiTin'=>'Giải Trí','ThuTu'=>'1','AnHien'=>'1','idTL'=>'4'],
            ['TenLoaiTin'=>'Mẹo Vặt','ThuTu'=>'4','AnHien'=>'1','idTL'=>'2'],
            ['TenLoaiTin'=>'Sống Đẹp','ThuTu'=>'1','AnHien'=>'1','idTL'=>'2'],
            ['TenLoaiTin'=>'Lịch Thi Đấu','ThuTu'=>'4','AnHien'=>'1','idTL'=>'4'],
            ['TenLoaiTin'=>'BXH Bóng Đá','ThuTu'=>'4','AnHien'=>'1','idTL'=>'4'],
            ['TenLoaiTin'=>'Nhạc Trẻ','ThuTu'=>'1','AnHien'=>'1','idTL'=>'5'],
            ['TenLoaiTin'=>'BXH Âm Nhạc','ThuTu'=>'4','AnHien'=>'1','idTL'=>'4'],
            ['TenLoaiTin'=>'Nhạc Xưa','ThuTu'=>'4','AnHien'=>'1','idTL'=>'5'],
            ['TenLoaiTin'=>'Hữu Ích','ThuTu'=>'1','AnHien'=>'1','idTL'=>'1'],
        ]);
    }
}
