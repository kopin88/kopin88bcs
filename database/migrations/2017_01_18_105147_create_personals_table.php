<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('gender');
            $table->string('serial')->nullable();
            $table->date('on_date')->nullable();
            $table->string('active')->default(0);
            $table->string('image')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('nrc')->nullable();
            $table->date('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('edu')->nullable();
            $table->string('unique')->nullable();
            $table->string('address')->nullable();
            $table->string('paddress')->nullable();
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
        Schema::dropIfExists('personals');
    }
}
