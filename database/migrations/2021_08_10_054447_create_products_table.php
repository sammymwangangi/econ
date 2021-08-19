<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku_code');
            $table->text('description');
            $table->foreignId('value_stream_id')
            ->nullable()
            ->constrained('value_streams')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('actual_pcs')->nullable();
            $table->integer('actual_ctn')->nullable();
            $table->integer('envelope_paper_weight')->nullable();
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
        Schema::dropIfExists('products');
    }
}
