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
        //   $this->call(UserSeeder::class);
         
        //  $this->call(CategorySeeder::class);

        //  $this->call(PostTableSeeder::class);

        // $this->call(PostSeeder::class);

        // $this->call(UserFakerSeeder::class);

        // $this->call(TheLoaiSeeder::class);
        
        // $this->call(LoaiTinSeeder::class);

    }
}
class UserSeeder extends Seeder{
    public function run(){
        DB::table('users')->insert([
            ['name'=>'abc','email'=>'ass.25122001@gmail.com','password'=>bcrypt('123456')],
            ['name'=>'dcf','email'=>'asc.12120112@gmail.com','password'=>bcrypt('123456')],
            ['name'=>'asc','email'=>'asc.11110110@gmail.com','password'=>bcrypt('123456')],
        ]);
    }
    
}
class PostSeeder extends Seeder{
    public function run(){
        DB::table('post')->insert([
            ['title'=>'Xa Hoi','content'=>'Xahoi doi song vvv','User_id'=>1,'Category_id'=>1],

            ['title'=>'Xa Hoi 123','content'=>'Xahoi doi song vvv123','User_id'=>3,'Category_id'=>2],

            ['title'=>'Xa Hoi 456','content'=>'Xahoi doi song vvv456','User_id'=>2,'Category_id'=>4],
        ]);;
    }
}
class UserFakerSeeder extends Seeder{
    public function run(){
        $faker =Faker\Factory::create();
        $limit = 10;
        for ($i = 0; $i<$limit;$i++){
            DB::table('users')->insert([
                ['name'=>$faker->name,
                'email'=>$faker->unique()->email(),'password'=>bcrypt('123456')
                ]
            ]);
        }
    }
    
}
class CategorySeeder extends Seeder{
    public function run(){
        DB::table('categories')->insert([
            ['title'=>'XaHoi','status'=>'dang dang'],
            ['title'=>'PhapLuat','status'=>'dang dang'],
            ['title'=>'AmNhac','status'=>'dang dang'],
            ['title'=>'BongDa','status'=>'dang dang'],
            ['title'=>'DoiSong','status'=>'chua dang'],
        ]);
    }
}