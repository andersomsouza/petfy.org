<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Anderson";
        $user->email = "anderson@garten.com.br";
        $user->password = Hash::make('123456');
        $user->save();


    }
}
