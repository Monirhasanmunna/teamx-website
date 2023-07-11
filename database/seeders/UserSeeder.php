<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name'  => 'Admin',
            'email' => 'dev@gmail.com',
            'password'  => bcrypt(11111111)
        ]);
    }
}
