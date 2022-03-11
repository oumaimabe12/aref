<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMatngensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_matngens', function(Blueprint $table)
		{
			$table->string('Code_Et', 10)->nullable();
			$table->string('NEFSTAT', 10)->nullable();
			$table->string('Matiere', 4)->nullable();
			$table->boolean('Nb_Clas')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_matngens');
	}

}
