<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date_heure');
            $table->unsignedBigInteger('moniteur');
            $table->foreign('moniteur')->references('id')->on('users');
            $table->unsignedBigInteger('user')->nullable();
            $table->foreign('user')->references('id')->on('users');
            $table->boolean('reserved')->default(false);
            $table->string('seance')->default("code");
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
        Schema::dropIfExists('rdvs');
    }
}
