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

                'name' => 'guest{$i}@example.com',
                'email' => 'guest{$i}@example.com',
                'password' => Hash::make('guest{$i}@example.com')
            ]);
        }
    }
}
