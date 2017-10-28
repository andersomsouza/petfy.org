<?php

use Illuminate\Database\Seeder;

class AnimaisSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->animais()->save(factory(App\Animal::class)->make());
        });
    }
}
