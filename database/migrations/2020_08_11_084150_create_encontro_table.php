<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encontro', function(Blueprint $table)
		{
			$table->integer('id_encontro', true);
			$table->integer('n_encontro')->index('fk_encontro');
			$table->integer('encontrista')->index('fk_enco');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('encontro');
	}

}
