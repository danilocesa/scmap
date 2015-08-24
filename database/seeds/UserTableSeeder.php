<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'role_id'   => 1,
            'name'     => 'Administrator',
            'user_name' => 'Administrator',
            'email'    => 'admin@scmap.org',
            'password' => Hash::make('welcome123'),
        ]);
    }
}
