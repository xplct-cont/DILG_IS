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
        Schema::create('field_officers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipality_id');
            $table->string('profile_img')->default('field_off.png')->nullable();
            $table->string('fname')->nullable();
            $table->string('mid_initial')->nullable();
            $table->string('lname')->nullable();
            $table->string('position')->nullable();
            $table->string('cluster')->nullable();
            $table->timestamps();

            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_officers');
    }
};
