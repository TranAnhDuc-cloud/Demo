<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
            ['title'=>'Xa Hoi','content'=>'Xahoi doi song vvv','User_id'=>1,'Category_id'=>1],

            ['title'=>'Xa Hoi 123','content'=>'Xahoi doi song vvv123','User_id'=>3,'Category_id'=>2],

            ['title'=>'Xa Hoi 456','content'=>'Xahoi doi song vvv456','User_id'=>2,'Category_id'=>4],
        ]);
    }
}

