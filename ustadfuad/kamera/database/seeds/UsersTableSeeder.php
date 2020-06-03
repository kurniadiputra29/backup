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
        $data = [
        	'name' => 'kap',
        	'email' => 'kap@gmail.com',
        	'password' => bcrypt('12345'),
        	'created_at' => now(),
        	'updated_at' => now(),
        ];
        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
