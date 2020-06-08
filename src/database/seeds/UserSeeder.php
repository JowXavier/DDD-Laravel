<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jonathan Xavier Ribeiro',
            'email' => 'jonathan.ribeiro@deeds.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('xavier'),
        ]);
    }
}
