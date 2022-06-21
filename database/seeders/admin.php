<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' => 'BMVT',
        'email' => 'bmvt@hcmut.edu.vn',
        'password' => Hash::make('Bmvt@hcmut'),
        'role_id' => '1'
        ]);
    }
}
