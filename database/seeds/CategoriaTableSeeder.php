<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
          array('descripcion' => 'Crimen'),
          array('descripcion' => 'Estafa'),
          array('descripcion' => 'Clima'),
          array('descripcion' => 'Politica'),
          array('descripcion' => 'Otros')
        ]);
    }
}
