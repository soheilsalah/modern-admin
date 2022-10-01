<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*\App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Soheil Salah',
            'email' => 'soheil.salah.dev@gmail.com',
            'password' => Hash::make('password123'),
            'remember_token' =>  Carbon::now(),
        ]);*/

        Admin::firstOrCreate(['email' => 'soheil.salah.dev'],[
            'name' => 'الادمن',
            'email' => 'soheil.salah.dev@gmail.com',
            'password' => Hash::make('password123'),
            'remember_token' =>  Carbon::now(),
        ]);
    }
}
