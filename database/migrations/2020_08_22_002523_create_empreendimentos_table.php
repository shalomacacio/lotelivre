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
      $table->string('nome');
      $table->string('cnpj')->nullable();
      $table->string('matricula')->nullable();
      $table->date('dt_lancamento');

      $table->integer('estado_id');
      $table->integer('cidade_id');

      $table->string('contato_1')->nullable();
      $table->string('contato_2')->nullable();
      $table->string('zap')->nullable();
      $table->string('email')->nullable();

      $table->string('url_video')->nullable();
      $table->text('texto_descritivo')->nullable();
      $table->text('texto_destaque')->nullable();

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
