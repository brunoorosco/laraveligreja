<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAcessonewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('acessonew', function(Blueprint $table)
		{
			$table->foreign('nivel_acesso', 'acessoNEW_ibfk_1')->references('id')->on('nivel_acesso')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('username', 'acessoNEW_ibfk_2')->references('email')->on('membros')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('userID', 'acessoNEW_ibfk_3')->references('idmembros')->on('membros')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('acessonew', function(Blueprint $table)
		{
			$table->dropForeign('acessoNEW_ibfk_1');
			$table->dropForeign('acessoNEW_ibfk_2');
			$table->dropForeign('acessoNEW_ibfk_3');
		});
	}

}
