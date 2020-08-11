<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipe', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('membro')->index('equipe');
			$table->integer('encontro')->index('id');
			$table->integer('tarefaEnc')->nullable()->default(0)->index('tarefaEnc');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipe');
	}

}
