<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('hours');
            $table->integer('mins');
            $table->integer('workforce_no');
            $table->integer('manhour');
            $table->unsignedBigInteger('operator_id')->nullable();
            $table->integer('no_plan_mins');
            $table->integer('planned_maintenance_mins');
            $table->integer('operating_mins');
            $table->float('run_time');

            $table->foreign('operator_id')->references('id')->on('employees');
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
        Schema::dropIfExists('shifts');
    }
}
