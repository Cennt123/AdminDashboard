<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ensure the 'admin' role exists
        Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);

        // Check if the user already exists
        $user = User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('admin12345'),
            ]
        );



        // Assign role only if not already assigned
        if (!$user->hasRole('admin')) {
            $user->assignRole('admin');
        }
    }
}
