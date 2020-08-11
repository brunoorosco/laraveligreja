<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProntmembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prontmembros', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('membro')->index('membro');
			$table->integer('course1')->nullable()->index('course1');
			$table->integer('course2')->nullable()->index('course2');
			$table->integer('course3')->nullable()->index('course3');
			$table->integer('course4')->nullable()->index('course4');
			$table->integer('course5')->nullable()->index('course5');
			$table->integer('course6')->nullable()->index('course6');
			$table->integer('course7')->nullable()->index('course7');
			$table->integer('course8')->nullable()->index('course8');
			$table->integer('course9')->nullable()->index('course9');
			$table->integer('course10')->nullable()->index('course10');
			$table->integer('course11')->nullable()->index('course11');
			$table->integer('course12')->nullable()->index('course12');
			$table->integer('course13')->nullable()->index('course13');
			$table->integer('course14')->nullable()->index('course14');
			$table->integer('course15')->nullable()->index('course15');
			$table->integer('course16')->nullable()->index('course16');
			$table->integer('course17')->nullable()->index('course17');
			$table->integer('course18')->nullable()->index('course18');
			$table->integer('course19')->nullable()->index('course19');
			$table->integer('course20')->nullable()->index('course20');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prontmembros');
	}

}
