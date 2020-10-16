<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEmpreendimentoDepoimentosTable.
 */
class CreateEmpreendimentoDepoimentosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empreendimento_depoimentos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('nome');
            $table->string('texto');
            $table->integer('empreendimento_id');
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
		Schema::drop('empreendimento_depoimentos');
	}
}
