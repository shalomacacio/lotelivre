<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateThumbnailsTable.
 */
class CreateThumbnailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thumbnails', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('titulo');
            $table->string('posicao');
            $table->string('span')->nullable();
            $table->string('span_cor')->nullable();
            $table->string('link')->default("#")->nullable();
            $table->tinyInteger('active')->nullable();

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
		Schema::drop('thumbnails');
	}
}
