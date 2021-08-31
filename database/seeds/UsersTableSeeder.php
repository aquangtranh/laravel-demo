<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     'name' => 'user1',
        //     'email' => 'abc@gmail.com',
        //     'password' => 'dvfvfbgbgbf'
        // ];
        // User::create($data);
        factory(User::class, 100)->create();
    }
}
