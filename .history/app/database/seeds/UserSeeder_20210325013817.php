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

            'name' => 'test@example.com',
            'email' => 'test@example.com',
            'password' => Hash::make('test@example.com')
        ]);

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([

                'name' => 'guest@example.com' . $i,
                'email' => 'guest@example.com' . $i,
                'password' => Hash::make('guest@example.com' . $i)
            ]);
        }
    }
}
