<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Admin Larissa',
            'email' => 'admin@mail.com',
            'verified' => true,
            'password' => bcrypt('12345678'),
            'is_admin' => true
        ]);
    }
}
