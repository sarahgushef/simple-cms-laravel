<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('admin123'),
            'remember_token' => Str::random(12)
        ]);
    }
}
