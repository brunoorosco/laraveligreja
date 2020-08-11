<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEncontroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('encontro', function(Blueprint $table)
		{
			$table->foreign('encontrista', 'fk_enco')->references('idEncontrista')->on('encontrista')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('n_encontro', 'fk_encontro')->references('n_encontro')->on('info_encontro')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('encontro', function(Blueprint $table)
		{
			$table->dropForeign('fk_enco');
			$table->dropForeign('fk_encontro');
		});
	}

}
