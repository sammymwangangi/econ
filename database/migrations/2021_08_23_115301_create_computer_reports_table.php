<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_reports', function (Blueprint $table) {
            $table->id();
            $table->time('start');
            $table->time('end');
            $table->integer('no_plan');
            $table->integer('preventative_maintenance_mins');
            $table->integer('operating_mins');
            $table->foreignId('product_id')
                ->nullable()
                ->constrained('products')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('paper_id')
                ->nullable()
                ->constrained('papers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('target');
            $table->integer('actual_output');
            $table->integer('gap');
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
            $table->foreignId('reject_id')
                ->nullable()
                ->constrained('rejects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('no_of_rejects');

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
        Schema::dropIfExists('computer_reports');
    }
}
