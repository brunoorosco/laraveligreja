<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncontristaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encontrista', function(Blueprint $table)
		{
			$table->integer('idEncontrista', true);
			$table->string('nomeEnc', 45);
			$table->string('telEnc', 15)->nullable();
			$table->string('endEnc', 50)->nullable();
			$table->string('sexoEnc', 10)->nullable();
			$table->string('CEM', 25)->nullable();
			$table->string('observacao', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('encontrista');
	}

}
