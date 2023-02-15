<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstables', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('title')->nullable();
            $table->longText('caption')->nullable();
            $table->longText('image')->nullable();
            $table->string('datetime')->nullable();
            // $table->unsignedBigInteger('image_id');
            // $table->foreign('image_id')->references('id')->on('newsimages')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('newstables');
    }
};
