<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(5)->create()->each(fn ($user) => $user->assignRole('alumno'));
        User::factory()->count(5)->create()->each(fn ($user)=>$user->assignRole('profesor'));
        $user = User::create([
            'name'=> "admin",
            'apellido' => "admin",
            'fecha_nacimiento'=>'2000-01-01',
            'email' => "a@a.com",
            'password' => bcrypt("12345678")
        ]);

        $user->assignRole('admin');
    }
}
