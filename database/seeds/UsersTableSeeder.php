<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Contructor Company',
            'role'=>'admin',
            'email' => 'contructorcompany@gmail.com',
            'password' => bcrypt('Admin.4'),
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'role'=>'standard',
            'email' => 'test@gmail.com',
            'password' => bcrypt('Test.4'),
        ]);

    }
}
