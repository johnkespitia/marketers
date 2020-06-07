<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsGroups extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients_groups', function (Blueprint $table) {
            $table->integer("client_id");
            $table->integer("group_id");
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('group_id')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients_groups', function (Blueprint $table) {
            Schema::dropIfExists('clients_groups');
        });
    }
}
