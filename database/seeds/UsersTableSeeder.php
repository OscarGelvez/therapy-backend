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
            'name' => 'Dayana Gelvez',
            'email' => 'dayanagelvez48@gmail.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
