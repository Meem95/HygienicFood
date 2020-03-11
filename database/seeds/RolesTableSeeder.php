<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);
        DB::table('roles')->insert([
            'name' => 'User',
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);
        DB::table('roles')->insert([
            'name' => 'User1',
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);
        DB::table('roles')->insert([
            'name' => 'User2',
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);
        DB::table('roles')->insert([
            'name' => 'User3',
            'created_at' => '2019-09-05 11:13:00',
            'updated_at' => '2019-09-05 11:13:00',
        ]);



    }
}
