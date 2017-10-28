<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Animal;

class AnimalsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $animal = new Animal();
        $animal->tipo = "Gato";
        $animal->sexo = "Macho";
        $animal->porte = "Pequeno";
        $animal->cor = "Mesclado";
        $animal->castrado = true;
        $animal->vacinado = true;
        $animal->necessidadesEspecias = "Nenhuma";


        $user->animals()->save($animal);
    }
}
