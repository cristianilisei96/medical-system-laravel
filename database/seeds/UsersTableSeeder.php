<?php

use App\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Ilisei Cristian',
            'email' => 'cristianilisei96@gmail.com',
            'password' => Hash::make('Parolamea11'),
        ]);
    }
}
