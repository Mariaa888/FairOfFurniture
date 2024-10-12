<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::register(10)->create();

     \App\Models\User::register()->create([
             'name' => 'Mariam',
            'Pass' => 123456789,
            'Gender' =>'Female',
            'Phone'=>123456789,
            'Adress'=>'Aden',
          'email' => 'Mari@gmail.com',
        ]);
    }
}