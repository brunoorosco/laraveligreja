<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReencontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reencontro', function(Blueprint $table)
		{
			$table->foreign('id_reencontrista', 'reencontro_ibfk_1')->references('idReencontrista')->on('reencontrista')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_reencontro', 'reencontro_ibfk_2')->references('n_reencontro')->on('info_reencontro')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reencontro', function(Blueprint $table)
		{
			$table->dropForeign('reencontro_ibfk_1');
			$table->dropForeign('reencontro_ibfk_2');
		});
	}

}
