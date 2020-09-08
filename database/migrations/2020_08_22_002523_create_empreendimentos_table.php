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
      $table->string('razao_social')->nullable();
      $table->string('cnpj')->nullable();
      $table->string('matricula')->nullable();
      $table->string('cartorio')->nullable();
      $table->date('dt_aprovacao');

      $table->tinyInteger('ativo')->defalt(0);
      $table->string('banner_g')->nullable();
      $table->string('banner_m')->nullable();
      $table->string('banner_p')->nullable();
      $table->string('banner_p_span')->nullable();
      $table->tinyInteger('banner_p_destaque')->defalt(0);
      $table->string('url_video')->nullable();
      $table->tinyInteger('url_video_destaque')->defalt(0);
      $table->text('texto_descritivo')->nullable();
      $table->text('texto_destaque')->nullable();
      $table->text('especificacoes')->nullable();




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
