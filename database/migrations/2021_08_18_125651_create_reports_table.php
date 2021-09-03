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
            $table->date('production_date');
            $table->time('start');
            $table->time('end');
            $table->integer('workforce');
            $table->foreignId('value_stream_id')->nullable()->constrained('value_streams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('machine_id')->nullable()->constrained('machines')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('shift_id')->nullable()->constrained('shifts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('operator_id')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('assis_1')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('assis_2')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('assis_3')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('assis_4')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('assis_5')->nullable()->constrained('employees')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('product_1')->nullable()->constrained('products')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('pieces')->nullable();
            $table->integer('cartons')->nullable();
            $table->integer('target_quantity_pcs')->nullable();
            $table->foreignId('availability_loss_id')->nullable()->constrained('availability_losses')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('availability_loss_mins')->nullable();
            $table->foreignId('reject_id')->nullable()->constrained('rejects')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rejected_pcs')->nullable();
            $table->integer('offcut_kgs')->nullable();
            $table->integer('reject_kgs')->nullable();
            $table->integer('trim_waste_kgs')->nullable();
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
