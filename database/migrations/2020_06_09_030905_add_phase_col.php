<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhaseCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_client_phase', function (Blueprint $table) {
            $table->integer("business_id");
            $table->integer("client_id");
            $table->integer("phase_id");
            $table->foreign('phase_id')->references('id')->on('client_phases');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_client_phase');
    }
}
