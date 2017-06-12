<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInPayrollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_payrolls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('month_id')->unsigned()->default(0);
            $table->foreign('month_id')->references('id')->on('months') ->onDelete('cascade');
            $table->integer('personal_id')->nullable()->unsigned();
            $table->string('description');
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
        Schema::dropIfExists('in_payrolls');
    }
}
