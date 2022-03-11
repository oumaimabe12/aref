<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profs', function(Blueprint $table)
		{
			$table->string('Cycle_For', 2)->nullable();
			$table->string('Cycle_Exe', 2)->nullable();
			$table->string('Code_Et', 10)->nullable();
			$table->float('Doti', 10, 0)->nullable();
			$table->string('Nom', 100)->nullable();
			$table->string('NomFr')->nullable();
			$table->string('SexePr')->nullable();
			$table->dateTime('Dat_Nais')->nullable();
			$table->string('Matiere', 4)->nullable();
			$table->dateTime('Dat_Rec')->nullable();
			$table->dateTime('Dat_Aff_Del')->nullable();
			$table->dateTime('Dat_aff_Et')->nullable();
			$table->string('CIN')->nullable();
			$table->boolean('Avctif', 1)->nullable();
			$table->string('ObsAc')->nullable();
			$table->string('Obs1')->nullable();
			$table->string('Obs2')->nullable();
			$table->dateTime('Dat_Aff_Aca')->nullable();
			$table->string('F19')->nullable();
			$table->string('F20')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profs');
	}

}
