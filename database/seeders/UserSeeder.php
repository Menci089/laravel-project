<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**php artisan db:seed
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'falah@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
        User::create([
            'name'=>'staff',
            'email'=>'staff@gmail.com',
            'password'=>bcrypt('rahasia')
        ]);
    }
}
