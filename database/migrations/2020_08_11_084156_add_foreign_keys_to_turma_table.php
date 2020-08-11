<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTurmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('turma', function(Blueprint $table)
		{
			$table->foreign('alunos', 'turma_ibfk_1')->references('idmembros')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('curso', 'turma_ibfk_2')->references('idCursos')->on('infocursos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('turma', function(Blueprint $table)
		{
			$table->dropForeign('turma_ibfk_1');
			$table->dropForeign('turma_ibfk_2');
		});
	}

}
