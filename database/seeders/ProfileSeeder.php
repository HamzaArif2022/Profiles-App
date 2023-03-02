<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Str;
use  App\Models\profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('profiles')->insert([
        //     'id'=>2,'name'=>Str::random(1,10),'email'=>Str::random(1,5).'@email.com','password'=>Hash::make('password'),'bio'=>Str::random(1,100)
        // ]);
        profile::factory(100)->create();
    }
}