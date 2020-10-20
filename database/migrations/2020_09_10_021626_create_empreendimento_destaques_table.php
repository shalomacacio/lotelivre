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
            $table->string('span')->nullable();
            $table->string('span_color')->nullable();
            $table->string('preco')->nullable();
            $table->string('preco_antigo')->nullable();
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
