<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //esto es para crear los roles
        Roles::create(["name" => "admin"]);
        Roles::create(["name" => "profesor"]);
        Roles::create(["name" => "alumno"]);
    }
}
