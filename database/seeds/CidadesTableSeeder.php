<?php

use Illuminate\Database\Seeder;

class CidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->createCidade();
    }

    public function createCidade()
    {
      DB::table('cidades')->insert(array (
        0 =>
        array (
            'estado_id' => '6',
            'nome' => 'Fortaleza',
        )
      ));

    }
}
