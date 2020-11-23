<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run() {
        $user = new \App\Models\User();
        $user->setAttribute("name", "admin");
        $user->setAttribute("password", '$2y$12$qLmzNSp.8P9cwcGvLjZK4Os.SnOvVP8/MuWPY7GMMuUQ1KQHByNXO'); //secret
        $user->setAttribute("email", "test@user.local");
        $user->save();
    }
}
