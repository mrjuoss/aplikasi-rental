<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        User::create([
            'name' => 'Mohamad Arif Mujaki',
            'email' => 'mrjuoss@yahoo.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now()
        ]);
    }
}
