<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heirs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unsigned()->default(0);
            $table->foreign('personal_id')->references('id')->on('personals') ->onDelete('cascade');
            $table->string('name');
            $table->string('related');
            $table->string('nrc');
            $table->string('remark');
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
        Schema::drop(['personal_id']);
        Schema::dropIfExists('heirs');
    }
}
