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
        Schema::create('bohol_issuances', function (Blueprint $table) {
            $table->id();
            $table->string('outcome_area')->nullable();
            $table->longText('title')->nullable();
            $table->longText('reference_num')->nullable();
            $table->string('file')->nullable();
            $table->date('date')->nullable();
            $table->string('category')->nullable();
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
        Schema::dropIfExists('bohol_issuances');
    }
};
