<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membros', function(Blueprint $table)
		{
			$table->integer('idmembros', true);
			$table->string('nome', 50);
			$table->date('nasc')->nullable();
			$table->string('endereco', 50)->nullable();
			$table->string('numero', 10)->nullable()->default('\'NULL\'');
			$table->string('telefone', 15)->nullable();
			$table->string('supervisao', 25)->nullable();
			$table->string('cargo', 15);
			$table->string('email', 50)->nullable()->index('email_index');
			$table->integer('igreja')->default(1)->index('igreja');
			$table->string('status', 10)->nullable()->default('\'ativo\'');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('membros');
	}

}
