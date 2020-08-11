<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReencontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reencontro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_reencontrista')->index('reencontro_ibfk_1');
			$table->integer('id_reencontro')->index('id_reencontro');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reencontro');
	}

}
