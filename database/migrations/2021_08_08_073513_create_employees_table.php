<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable();
            $table->string('grade');
            $table->string('name');
            $table->string('designation');
            $table->string('department')->nullable();
            $table->string('vs')->nullable();
            $table->string('cell')->nullable();
            $table->string('machine')->nullable();
            $table->string('territory')->nullable();
            $table->string('reports_to_name')->nullable();
            $table->integer('reports_to_code')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('employees');
    }
}
