<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Decimal;

class CreateEtatbesoinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etatbesoin', function (Blueprint $table) {
            $table->integer('id');
            $table->string('etab');
            $table->string('mat');
            $table->integer('besoin');
            $table->integer('real');
            $table->Decimal('etat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etatbesoin');
    }
}
