<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsCampaings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_campaings', function (Blueprint $table) {
            $table->integer("client_id");
            $table->integer("campaing_id");
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('campaing_id')->references('id')->on('campaings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients_campaings', function (Blueprint $table) {
            Schema::dropIfExists('clients_campaings');
        });
    }
}
