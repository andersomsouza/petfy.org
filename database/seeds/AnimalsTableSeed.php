<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Animal;
use App\User;

class AnimalsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        Log::info('Adicionando no user: '.var_dump($user));
        $animal = new Animal();
        $animal->tipo = "Gato";
        $animal->sexo = "Macho";
        $animal->porte = "Pequeno";
        $animal->cor = "Mesclado";
        $animal->castrado = true;
        $animal->vacinado = true;
        $animal->necessidadesEspeciais = "Nenhuma";


        $user->animals()->save($animal);
    }
}
