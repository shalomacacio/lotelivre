<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEmpreendimentoItensTable.
 */
class CreateEmpreendimentoItensTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empreendimento_itens', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('empreendimento_id');
            $table->string('descricao');
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
		Schema::drop('empreendimento_itens');
	}
}
