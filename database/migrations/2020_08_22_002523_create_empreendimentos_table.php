<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEmpreendimentosTable.
 */
class CreateEmpreendimentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empreendimentos', function(Blueprint $table) {
      $table->increments('id');
      $table->string('nome_fantasia');
      $table->string('razao_social');
      $table->string('cnpj');
      $table->string('matricula')->nullable();
      $table->string('cartorio')->nullable();
      $table->date('dt_aprovacao');
      $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empreendimentos');
	}
}
