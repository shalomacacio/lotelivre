<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBannerRotativosTable.
 */
class CreateBannerRotativosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banner_rotativos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->tinyInteger('ativo')->default(0);
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
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
		Schema::drop('banner_rotativos');
	}
}
