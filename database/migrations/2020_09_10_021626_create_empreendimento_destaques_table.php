<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEmpreendimentoDestaquesTable.
 */
class CreateEmpreendimentoDestaquesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empreendimento_destaques', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('empreendimento_id');
            $table->string('img');
            $table->string('span');
            $table->string('span_color');
            $table->string('preco_antigo');
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
		Schema::drop('empreendimento_destaques');
	}
}
