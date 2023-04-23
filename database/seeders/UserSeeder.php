<?php

namespace Database\Seeders;

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
      \App\Models\User::factory()->create([
        'photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", 'Benevolent Beings'),
        'display_name' => 'Benevolent Beings',
        'username' => 'benevolentbeings',
        'email' => 'benevolentbeings@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      ]);

      \App\Models\User::factory()->create([
        'photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", 'Daniel Lehmann'),
        'display_name' => 'Daniel Lehmann',
        'username' => 'daniellehmann',
        'email' => 'danielran11@gmail.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      ]);

      \App\Models\User::factory()->create([
        'photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", 'Hannah Lehmann'),
        'display_name' => 'Hannah Lehmann',
        'username' => 'hannahlehmann',
        'email' => 'hannahmaria.l@gmail.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      ]);

      \App\Models\User::factory()->create([
        'photo_url' => sprintf("https://ui-avatars.com/api/?name=%s", 'Elbert Hubbard'),
        'display_name' => 'Elbert Hubbard',
        'username' => 'elberthubbard',
        'email' => 'elberthubbard@example.com',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      ]);
    }
}
