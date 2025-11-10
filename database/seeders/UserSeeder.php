<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // <-- Pastiin ini bener
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
   
    public function run(): void
    {
      

    
        User::create([
            'name' => 'Admin HMPS',
            'email' => 'admin@hmps.mi',
            'password' => Hash::make('password123'), 
        ]);

      
    }
}