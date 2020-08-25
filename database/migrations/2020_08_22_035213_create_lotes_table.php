<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateLotesTable.
 */
class CreateLotesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lotes', function(Blueprint $table) {
      $table->increments('id');
      $table->integer('empreendimento_id');
      $table->string('quadra');
      $table->string('lote');
      $table->tinyInteger('construcao')->nullable();
      $table->tinyInteger('vendido')->nullable();
      $table->decimal('valor')->nullable();
      $table->string('rgi_individual')->nullable();
      $table->decimal('area')->nullable();
      $table->decimal('frente')->nullable();
      $table->decimal('fundo')->nullable();
      $table->decimal('direita')->nullable();
      $table->decimal('esquerda')->nullable();
      $table->string('frente_com')->nullable();
      $table->string('fundo_com')->nullable();
      $table->string('direita_com')->nullable();
      $table->string('esquerda_com')->nullable();
      $table->text('descricao')->nullable();
      $table->text('obs')->nullable();
      $table->integer('tipo_imovel_id')->nullable();
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
		Schema::drop('lotes');
	}
}
