<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('month_id')->unsigned()->default(0);
            $table->foreign('month_id')->references('id')->on('months') ->onDelete('cascade');
            $table->date('date');
            $table->string('name');
            $table->string('description');
            $table->integer('income_head_id')->nullable()->unsigned();
            $table->bigInteger('amount');
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('incomes');
    }
}
