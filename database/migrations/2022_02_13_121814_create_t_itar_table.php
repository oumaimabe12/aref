<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTItarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_itar', function(Blueprint $table)
		{
			$table->string('Cycle_For', 2)->nullable();
			$table->string('Sexe_Pr', 1)->nullable();
			$table->string('Itar')->nullable();
			$table->string('Des_Cycle')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_itar');
	}

}
