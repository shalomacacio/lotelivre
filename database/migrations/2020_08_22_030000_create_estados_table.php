<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateEstadosTable.
 */
class CreateEstadosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->string('sigla')->nullable();
            $table->integer('iso')->nullable();
            $table->string('slug')->nullable();
            $table->integer('populacao')->nullable();
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
		Schema::drop('estados');
	}
}
