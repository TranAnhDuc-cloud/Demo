<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(Loaisanpham::class);
    }
}
class UserSeeder extends Seeder{
    public function run(){
        // select * from    
        DB::table('users')->insert([
            ['name'=>'duc1',
            'email'=>'ductran.25122001@gmail.com',
            'password'=>bcrypt('123456')],
            ['name'=>'duc2',
            'email'=>'ductran.121201@gmail.com',
            'password'=>bcrypt('123456')],
            ['name'=>'duc3',
            'email'=>'ductran.11110110@gmail.com',
            'password'=>bcrypt('123456'),]
        ]);
    }
}
class Loaisanpham extends Seeder{
    public function run(){
        DB::table('users')->insert([
            ['name'=>'duc1','email'=>'taitran.25122001@gmail.com','password'=>bcrypt('123456')],
            ['name'=>'duc2','email'=>'ductrananh.12120112@gmail.com','password'=>bcrypt('123456')],
            ['name'=>'duc3','email'=>'dungtran.11110110@gmail.com','password'=>bcrypt('123456')],
        ]);
    }
    
}