<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'auto@avtopegasus.az',
            'password'=>bcrypt(1020)
        ]);
    }
}
