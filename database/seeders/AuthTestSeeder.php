<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AuthTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mi Nombre',
            'email' => 'myemail@mac.com',
            'password' => bcrypt('secret')
        ]);
    }
}
