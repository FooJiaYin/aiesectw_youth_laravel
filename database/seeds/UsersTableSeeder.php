<?php

use Carbon\Carbon;
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
            ['name' => 'Abel',
            'email' => 'kent62001@gmail.com',
            'password' => bcrypt('528941'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
            ['name' => '後台管理員',
            'email' => 'youthspeaktw@gmail.com',
            'password' => bcrypt('youthspeak20152015'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()],
        ]);
    }
}
