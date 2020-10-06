<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBlogComentariosTable.
 */
class CreateBlogComentariosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_comentarios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->string('name');
            $table->string('email');
            $table->text('mensagem');
            $table->tinyInteger('autorizado')->default(0);
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
		Schema::drop('blog_comentarios');
	}
}
