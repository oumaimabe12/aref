<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTakalifTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_takalif', function(Blueprint $table)
		{
			$table->integer('N_Tak')->nullable();
			$table->dateTime('Date_Tak')->nullable();
			$table->string('Typ_Tak', 80)->nullable();
			$table->integer('Doti')->nullable();
			$table->string('Mat_En', 4)->nullable();
			$table->string('Cycl_En1', 2)->nullable();
			$table->string('Et_Fon1', 15)->nullable();
			$table->string('Dat_Deb1')->nullable();
			$table->string('Dat_Fin1')->nullable();
			$table->string('Pr_Et1')->nullable();
			$table->boolean('NbHEt1')->nullable();
			$table->string('Obj_Tak1')->nullable();
			$table->string('Obj_Pr1')->nullable();
			$table->string('Mat_En2', 4)->nullable();
			$table->string('Cycl_En2', 2)->nullable();
			$table->string('Et_Fon2', 15)->nullable();
			$table->string('Dat_Deb2')->nullable();
			$table->string('Dat_Fin2')->nullable();
			$table->string('Pr_Et2')->nullable();
			$table->boolean('NbHEt2')->nullable();
			$table->string('Obj_Tak2')->nullable();
			$table->string('Obj_Pr2')->nullable();
			$table->boolean('Tak_Valid', 1)->nullable();
			$table->boolean('Tak_Valid2', 1)->nullable();
			$table->string('Ref2')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_takalif');
	}

}
