<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBannerVideosTable.
 */
class CreateBannerVideosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banner_videos', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('empreendimento_id');
            $table->string('url');
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
		Schema::drop('banner_videos');
	}
}
