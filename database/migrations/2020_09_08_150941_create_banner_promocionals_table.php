<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBannerPromocionalsTable.
 */
class CreateBannerPromocionalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banner_promocionals', function(Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('titulo')->nullable();
            $table->string('subtitulo')->nullable();
            $table->string('span')->nullable();
            $table->string('txt_button')->nullable();
            $table->string('link_button')->nullable();
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
		Schema::drop('banner_promocionals');
	}
}
