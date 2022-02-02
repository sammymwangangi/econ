<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationeries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id')->nullable()->constrained('machines')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('shift_id')->nullable()->constrained('shifts')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('manpower');
            $table->integer('target_output');
            $table->integer('total_output');
            $table->integer('mencell');
            $table->text('status');
            $table->integer('reels_consumed');
            $table->integer('off_cut_defects');
            $table->integer('trim_waste');
            $table->integer('rejects_rework');
            $table->integer('shift_kgs');
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
        Schema::dropIfExists('stationeries');
    }
}
