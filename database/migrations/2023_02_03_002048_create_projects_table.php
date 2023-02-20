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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('program_id');

            $table->string('proj_code')->nullable();
            $table->string('title')->nullable();
            $table->string('province')->default('Bohol');
            $table->unsignedBigInteger('municipality_id');
            $table->string('exact_loc')->nullable();
            $table->string('year')->nullable();
            $table->longText('description')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('total_cost')->nullable();
            $table->longText('images')->nullable();
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('projects');
    }
};
