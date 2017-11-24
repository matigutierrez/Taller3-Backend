<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([      
          'nombre' => 'Matias20',
          'email' => 'm.gutierrezu@ufromail.cl',
          'password' => bcrypt('1234')
        ]);
    }
}
