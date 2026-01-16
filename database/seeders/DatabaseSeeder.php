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
      //$this::call([AlumnoSeeder::class]);
      $this->call([
        RolesSeeder::class,
        UserSeeder::class,
      ]);
    }
}