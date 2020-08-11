<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfocursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infocursos', function(Blueprint $table)
		{
			$table->integer('idCursos', true);
			$table->string('nomeCursos', 50)->nullable();
			$table->string('tema', 50)->nullable();
			$table->date('data_')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('infocursos');
	}

}
