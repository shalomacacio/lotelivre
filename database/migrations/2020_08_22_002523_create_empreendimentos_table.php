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
      $table->string('nome')->unique();
      $table->string('cnpj')->nullable();
      $table->string('matricula')->nullable();
      $table->date('dt_lancamento');

      $table->integer('estado_id');
      $table->integer('cidade_id');

      $table->string('contato_1')->nullable();
      $table->string('contato_2')->nullable();
      $table->string('zap')->nullable();
      $table->string('email')->nullable();

      $table->string('texto_banner')->nullable();
      $table->string('texto_banner_cor')->nullable();

      $table->string('btn_banner_txt')->nullable();
      $table->string('btn_banner_link')->nullable();
      $table->string('btn_banner_cor')->nullable();

      $table->string('titulo_card_1');
      $table->mediumText('texto_card_1');

      $table->string('titulo_card_2');
      $table->mediumText('texto_card_2');

      $table->string('titulo_planta');
      $table->string('texto_planta');
      $table->string('bg_planta')->default('#ffffff');

      $table->string('url_video')->nullable();
      $table->longText('texto_descritivo')->nullable();

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
