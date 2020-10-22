<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateNoticiasTable.
 */
class CreateNoticiasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('titulo');
            $table->string('subtitulo')->nullable();
            $table->longText('texto')->nullable();
            $table->string('link')->default("#")->nullable();
            $table->date('data_noticia')->nullable();
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
		Schema::drop('noticias');
	}
}
