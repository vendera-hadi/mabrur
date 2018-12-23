<?php

use Illuminate\Database\Seeder;

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
        [
            'name' => 'admin',
            'email' => 'admin.nalarnaluri@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin',
            'category_id' => 0
        ],[
            'name' => 'user umum',
            'email' => 'umum.nalarnaluri@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'member',
            'category_id' => 1
        ],[
            'name' => 'user sma',
            'email' => 'sma.nalarnaluri@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'member',
            'category_id' => 2
        ]
      ]);
    }
}
