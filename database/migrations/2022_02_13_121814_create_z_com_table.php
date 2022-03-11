<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZComTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_com', function(Blueprint $table)
		{
			$table->string('cd_com')->nullable();
			$table->string('ll_com')->nullable();
			$table->string('la_com')->nullable();
			$table->string('CD_MIL')->nullable();
			$table->string('CD_PROV')->nullable();
			$table->string('Actif')->nullable();
			$table->string('DateModification')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_com');
	}

}
