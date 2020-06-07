<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->text('message', 200);
            $table->boolean('type');
            $table->integer('campaign_id')->nullable();
            $table->integer('chanel_id');
            $table->text('notes',150)->nullable();
            $table->integer('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('chanel_id')->references('id')->on('chanels');
            $table->foreign('campaign_id')->references('id')->on('campaings');
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
        Schema::dropIfExists('contacts');
    }
}
