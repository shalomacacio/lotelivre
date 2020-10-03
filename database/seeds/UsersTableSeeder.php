<?php

use App\Entities\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->createUser();
    }

    private function createUser()
    {
      User::create([
        'name' => 'Administrador',
        'email' => 'admin@lotelivre.com.br',
        'password' => '@admin123',
      ]);
      // Exibe uma informação no console durante o processo de seed
      $this->command->info('usuario Administrador criado');

    }
}
