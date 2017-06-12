<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unsigned()->default(0);
            $table->foreign('personal_id')->references('id')->on('personals');
            $table->string('description');
            $table->string('country');
            $table->date('from_date');
            $table->date('to_date');
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
        Schema::dropIfExists('knowledges');
    }
}
