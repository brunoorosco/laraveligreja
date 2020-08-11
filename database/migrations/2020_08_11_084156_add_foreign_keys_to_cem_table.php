<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cem', function(Blueprint $table)
		{
			$table->foreign('responsavel', 'cem_ibfk_1')->references('idmembros')->on('membros')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cem', function(Blueprint $table)
		{
			$table->dropForeign('cem_ibfk_1');
		});
	}

}
