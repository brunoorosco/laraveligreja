<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('equipe', function(Blueprint $table)
		{
			$table->foreign('membro', 'equipe_ibfk_1')->references('idmembros')->on('membros')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('encontro', 'equipe_ibfk_2')->references('id')->on('info_encontro')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('tarefaEnc', 'equipe_ibfk_3')->references('id')->on('tarefas_equipe')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('equipe', function(Blueprint $table)
		{
			$table->dropForeign('equipe_ibfk_1');
			$table->dropForeign('equipe_ibfk_2');
			$table->dropForeign('equipe_ibfk_3');
		});
	}

}
