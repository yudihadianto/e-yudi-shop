<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Admin',
                'email'=>'yudihadianto@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'user',
                'status'=>'active'
            ),
            array(
                'name'=>'Abah Yudi',
                'email'=>'abahyudi@gmail.com',
                'password'=>Hash::make('123456'),
                'role'=>'admin',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
