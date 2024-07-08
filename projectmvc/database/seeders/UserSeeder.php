<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Roles::all();
        User::create(["name" => "tai khoan 1", "email" => "taikhoan1@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[0]->id]);
        User::create(["name" => "tai khoan 2", "email" => "taikhoan2@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[0]->id]);
        User::create(["name" => "tai khoan 3", "email" => "taikhoan3@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[1]->id]);
        User::create(["name" => "tai khoan 4", "email" => "taikhoan4@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[1]->id]);
        User::create(["name" => "tai khoan 5", "email" => "taikhoan5@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[2]->id]);
        User::create(["name" => "tai khoan 6", "email" => "taikhoan6@gmail.com", "password" => Hash::make("123456"), "role_id" => $roles[2]->id]);
    }
}
