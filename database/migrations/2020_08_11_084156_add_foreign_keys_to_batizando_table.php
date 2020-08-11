<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBatizandoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batizando', function(Blueprint $table)
		{
			$table->foreign('cem', 'batizando_ibfk_1')->references('id')->on('cem')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batizando', function(Blueprint $table)
		{
			$table->dropForeign('batizando_ibfk_1');
		});
	}

}
