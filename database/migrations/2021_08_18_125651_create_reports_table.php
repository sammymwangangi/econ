<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->time('start');
            $table->time('end');
            $table->integer('run_mins');
            $table->integer('no_plan');
            $table->integer('operating_mins');
            $table->integer('failure_mins');
            $table->foreignId('availability_loss_id')
                ->nullable()
                ->constrained('availability_losses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('availability_loss_mins');
            $table->foreignId('value_stream_id')
                ->nullable()
                ->constrained('value_streams')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('machine_id')
                ->nullable()
                ->constrained('machines')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('shift_id')
                ->nullable()
                ->constrained('shifts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('operator_id')
                ->nullable()
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('assis_1')
                ->nullable()
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('assis_2')
                ->nullable()
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('assis_3')
                ->nullable()
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('assis_4')
                ->nullable()
                ->constrained('employees')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('reject_id')
                ->nullable()
                ->constrained('rejects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('no_of_rejects');
            $table->integer('availability_percentage');
            $table->integer('performance_percentage');
            $table->integer('quality_percentage');
            $table->integer('oee_percentage');
            
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
        Schema::dropIfExists('reports');
    }
}
