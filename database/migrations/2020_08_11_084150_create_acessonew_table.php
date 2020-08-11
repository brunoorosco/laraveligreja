<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcessonewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acessonew', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 50)->nullable()->index('username');
			$table->string('password', 50);
			$table->char('ativo', 1)->nullable();
			$table->integer('nivel_acesso')->nullable()->index('nivel_acesso');
			$table->integer('userID')->nullable()->index('userID');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acessonew');
	}

}
