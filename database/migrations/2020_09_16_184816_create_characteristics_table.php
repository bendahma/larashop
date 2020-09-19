<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('ReleasedDate')->nullable();
            $table->string('Network')->nullable();
            $table->string('Dimensions')->nullable();
            $table->string('DisplaySize')->nullable();
            $table->string('DisplayResolution')->nullable();
            $table->string('OS')->nullable();
            $table->string('CPU')->nullable();
            $table->string('GPU')->nullable();
            $table->string('MemoryCardslot')->nullable();
            $table->string('MemoryInternal')->nullable();
            $table->string('MemoryRam')->nullable();
            $table->string('MainCamera')->nullable();
            $table->string('SelfierCamera')->nullable();
            $table->string('Sensors')->nullable();
            $table->string('Battery')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('characteristics');
    }
}
