<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTNbheureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_nbheure', function(Blueprint $table)
		{
			$table->string('nefstat')->nullable();
			$table->string('Code_Mat', 4)->nullable();
			$table->integer('NbHeure')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_nbheure');
	}

}
