<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAceitaJesusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aceita_jesus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nome', 50);
			$table->string('endereco', 50)->nullable();
			$table->string('telefone', 15)->nullable();
			$table->string('aceit_reconc', 12);
			$table->timestamp('cadastro')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('batizado', 5)->nullable();
			$table->string('cem', 25)->nullable();
			$table->string('idade', 5)->nullable()->default('0');
			$table->string('fixo', 15)->nullable();
			$table->string('cargo', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aceita_jesus');
	}

}
