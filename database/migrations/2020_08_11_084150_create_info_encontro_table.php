<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoEncontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_encontro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('n_encontro')->index('fk');
			$table->date('data_inicial');
			$table->string('tipo', 25);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('info_encontro');
	}

}
