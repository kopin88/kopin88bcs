<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unsigned()->default(0);
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
            $table->integer('leave_year_id')->nullable()->unsigned();
            $table->integer('leave_type_id')->nullable()->unsigned();
            $table->date('from_date');
            $table->date('to_date');
            $table->tinyInteger('total');
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
        Schema::dropIfExists('leaves');
    }
}
