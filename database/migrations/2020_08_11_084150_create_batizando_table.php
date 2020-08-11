<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBatizandoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batizando', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nome', 50);
			$table->date('aniversario')->nullable();
			$table->integer('cem')->nullable()->index('cem');
			$table->integer('batismo');
			$table->char('sexo', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batizando');
	}

}
