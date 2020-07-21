<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $administratorRole = Role::where('name', 'administrator')->first();
        $doctorRole = Role::where('name', 'doctor')->first();
        $pacientRole = Role::where('name', 'pacient')->first();


        $administrator = User::create([
            'name' => 'administrator',
            'email' => 'administrator@gmail.com',

            'password' => Hash::make('password')
        ]);
        $doctor = User::create([
            'name' => 'doctor',
            'email' => 'doctor@gmail.com',
            'password' => Hash::make('password')
        ]);
        $pacient = User::create([
            'name' => 'pacient',
            'email' => 'pacient@gmail.com',
            'password' => Hash::make('password')
        ]);

        $administrator->roles()->attach($administratorRole);
        $doctor->roles()->attach($doctorRole);
        $pacient->roles()->attach($pacientRole);
    }
}
