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
        Schema::create('lgus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('municipality_id')->unsigned();
            $table->string('mayor')->nullable();
            $table->string('vice_mayor')->nullable();
            $table->string('sb_member1')->nullable();
            $table->string('sb_member2')->nullable();
            $table->string('sb_member3')->nullable();
            $table->string('sb_member4')->nullable();
            $table->string('sb_member5')->nullable();
            $table->string('sb_member6')->nullable();
            $table->string('sb_member7')->nullable();
            $table->string('sb_member8')->nullable();
            $table->string('sb_member9')->nullable();
            $table->string('sb_member10')->nullable();
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
        Schema::dropIfExists('lgus');
    }
};
