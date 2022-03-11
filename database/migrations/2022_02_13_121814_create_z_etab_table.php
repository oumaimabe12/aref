<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZEtabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('z_etab', function(Blueprint $table)
		{
			$table->string('CD_ETAB')->nullable();
			$table->string('CD_GIPE')->nullable();
			$table->string('NOM_ETABL')->nullable();
			$table->string('NOM_ETABA')->nullable();
			$table->string('CD_COM')->nullable();
			$table->string('CD_NETAB')->nullable();
			$table->string('ensPrimG')->nullable();
			$table->string('ensPrimO')->nullable();
			$table->string('ensColG')->nullable();
			$table->string('ensColO')->nullable();
			$table->string('ensColS')->nullable();
			$table->string('ensColP')->nullable();
			$table->string('ensQualG')->nullable();
			$table->string('ensQualO')->nullable();
			$table->string('ensQualT')->nullable();
			$table->string('ensQualS')->nullable();
			$table->string('ensQualF')->nullable();
			$table->string('ensQualP')->nullable();
			$table->string('Email')->nullable();
			$table->string('typeEtab')->nullable();
			$table->string('Actif')->nullable();
			$table->string('DateModification')->nullable();
			$table->string('DO_ETAB')->nullable();
			$table->string('CD_etabr')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('z_etab');
	}

}
