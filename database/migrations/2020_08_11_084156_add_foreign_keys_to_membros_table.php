<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('membros', function(Blueprint $table)
		{
			$table->foreign('igreja', 'membros_ibfk_1')->references('idIgreja')->on('igrejas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('membros', function(Blueprint $table)
		{
			$table->dropForeign('membros_ibfk_1');
		});
	}

}
