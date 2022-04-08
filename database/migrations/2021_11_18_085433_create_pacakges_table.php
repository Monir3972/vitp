<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacakgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacakges', function (Blueprint $table) {
            $table->id();
            $table->string('course_title')->nullable();
            $table->string('course_price')->nullable();
            $table->string('delivery_mode')->nullable();
            $table->string('course_start')->nullable();
            $table->string('course_end')->nullable();
            $table->string('support')->nullable();
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
        Schema::dropIfExists('pacakges');
    }
}
