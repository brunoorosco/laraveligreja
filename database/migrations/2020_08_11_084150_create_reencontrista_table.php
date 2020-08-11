<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReencontristaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reencontrista', function(Blueprint $table)
		{
			$table->integer('idReencontrista', true);
			$table->string('nomeEnc', 45);
			$table->string('telEnc', 15)->nullable();
			$table->string('observacao', 150)->nullable();
			$table->string('endEnc', 50)->nullable();
			$table->string('sexoEnc', 10)->nullable();
			$table->string('CEM', 25)->nullable();
			$table->timestamp('cadastrado')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reencontrista');
	}

}
