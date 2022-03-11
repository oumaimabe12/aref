<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matiere', function(Blueprint $table)
		{
			$table->string('Code_Mat', 4)->nullable();
			$table->string('Lib_Fr')->nullable();
			$table->string('Designation', 50)->nullable();
			$table->boolean('Obligatoire', 1)->nullable();
			$table->integer('OrdAf')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('matiere');
	}

}
