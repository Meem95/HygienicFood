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
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@kutta.com',
            'mobile_number' => '01711111111',
            'image' => 'default.png',
            'password' => bcrypt('123456'),
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'User',
            'email' => 'user@gmail.com',
            'mobile_number' => '01711111112',
            'image' => 'default.png',
            'password' => bcrypt('123456'),
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);

    }
}
