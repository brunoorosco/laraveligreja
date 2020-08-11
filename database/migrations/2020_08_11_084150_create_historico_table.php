<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('historico', function(Blueprint $table)
		{
			$table->integer('idHist', true);
			$table->string('nome', 50)->nullable();
			$table->string('status_', 10)->nullable();
			$table->integer('membroCad')->nullable()->index('membroCad');
			$table->integer('curso')->nullable()->index('FK_historico_infocursos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('historico');
	}

}
