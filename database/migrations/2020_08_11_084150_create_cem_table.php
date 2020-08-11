<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cem', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('responsavel')->index('responsavel');
			$table->string('endereco', 50);
			$table->string('nome_cem', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cem');
	}

}
