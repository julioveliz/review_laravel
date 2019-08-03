<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Permiso::class,10)->create();
        factory(Permiso::class)->times(5)->create();
    }
}
