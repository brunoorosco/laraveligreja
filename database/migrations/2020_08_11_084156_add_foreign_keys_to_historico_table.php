<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHistoricoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('historico', function(Blueprint $table)
		{
			$table->foreign('curso', 'FK_historico_infocursos')->references('idCursos')->on('infocursos')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('membroCad', 'FK_historico_membros')->references('idmembros')->on('membros')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('historico', function(Blueprint $table)
		{
			$table->dropForeign('FK_historico_infocursos');
			$table->dropForeign('FK_historico_membros');
		});
	}

}
