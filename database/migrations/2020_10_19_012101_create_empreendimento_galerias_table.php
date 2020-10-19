<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEmpreendimentoGaleriasTable.
 */
class CreateEmpreendimentoGaleriasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empreendimento_galerias', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('empreendimento_id');
            $table->string('img');
            $table->string('titulo')->nullable();
            $table->string('texto')->nullable();
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
		Schema::drop('empreendimento_galerias');
	}
}
