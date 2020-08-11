<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProntmembrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prontmembros', function(Blueprint $table)
		{
			$table->foreign('membro', 'prontMembros_ibfk_1')->references('idmembros')->on('membros')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course9', 'prontmembros_10')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course10', 'prontmembros_11')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course11', 'prontmembros_12')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course12', 'prontmembros_13')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course13', 'prontmembros_14')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course14', 'prontmembros_15')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course15', 'prontmembros_16')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course16', 'prontmembros_17')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course17', 'prontmembros_18')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course18', 'prontmembros_19')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course1', 'prontmembros_2')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course19', 'prontmembros_20')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course20', 'prontmembros_21')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course2', 'prontmembros_3')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course3', 'prontmembros_4')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course4', 'prontmembros_5')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course5', 'prontmembros_6')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course6', 'prontmembros_7')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course7', 'prontmembros_8')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('course8', 'prontmembros_9')->references('id')->on('coursename')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prontmembros', function(Blueprint $table)
		{
			$table->dropForeign('prontMembros_ibfk_1');
			$table->dropForeign('prontmembros_10');
			$table->dropForeign('prontmembros_11');
			$table->dropForeign('prontmembros_12');
			$table->dropForeign('prontmembros_13');
			$table->dropForeign('prontmembros_14');
			$table->dropForeign('prontmembros_15');
			$table->dropForeign('prontmembros_16');
			$table->dropForeign('prontmembros_17');
			$table->dropForeign('prontmembros_18');
			$table->dropForeign('prontmembros_19');
			$table->dropForeign('prontmembros_2');
			$table->dropForeign('prontmembros_20');
			$table->dropForeign('prontmembros_21');
			$table->dropForeign('prontmembros_3');
			$table->dropForeign('prontmembros_4');
			$table->dropForeign('prontmembros_5');
			$table->dropForeign('prontmembros_6');
			$table->dropForeign('prontmembros_7');
			$table->dropForeign('prontmembros_8');
			$table->dropForeign('prontmembros_9');
		});
	}

}
