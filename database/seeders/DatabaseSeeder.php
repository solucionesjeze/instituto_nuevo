<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnoSeeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $user = User::create([
        "name" => "admin",
        "email" => "a@a.com",
        "password" => bcrypt("12345678")
      ]);

      //$this::call([AlumnoSeeder::class]);
      $this->call([
        AlumnoSeeder::class,
        RolesSeeder::class,
      ]);

      $user ->assignRole("admin");
    }
}