<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('months', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('financial_year_id')->nullable()->unsigned();
            $table->string('active')->default(0);
            $table->string('name');
            $table->string('title');
            $table->integer('month_balance_id')->nullable();
            $table->bigInteger('in_total')->nullable();
            $table->bigInteger('out_total')->nullable();
            $table->bigInteger('balance')->nullable();
            $table->bigInteger('open_balance')->nullable();
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
        Schema::dropIfExists('months');
    }
}
