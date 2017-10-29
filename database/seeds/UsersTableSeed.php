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
        $user->endereco = "Rua Bernardo José de Souza, 434";
        $user->contato = "(53) 9 8112 9428";
        $user->obs = "";
        $user->save();

        $user = new User();
        $user->name = "Gabriel";
        $user->email = "gdmramos@inf.ufpel.edu.br";
        $user->password = Hash::make('123456');
        $user->endereco = "Rua Bernardo Independencia, 124";
        $user->contato = "(53) 9 8322 9658";
        $user->obs = "";

        $user->save();
        $user = new User();
        $user->name = "Matheus Eduardo";
        $user->email = "freitag.matheus@gmail.com";
        $user->password = Hash::make('123456');
        $user->endereco = "Rua Alameda do Café, 422";
        $user->contato = "(53) 9 9123 9458";
        $user->obs = "";
        $user->save();


    }
}
