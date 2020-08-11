<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInfoReencontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('info_reencontro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('n_reencontro')->index('n_reencontro');
			$table->date('data_inicial');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('info_reencontro');
	}

}
