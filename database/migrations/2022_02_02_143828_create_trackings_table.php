<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string("tracking_id")->nullable();
            $table->string("from_address")->nullable();
            $table->string("to_address")->nullable();
            $table->string("from_city")->nullable();
            $table->string("to_city")->nullable();
            $table->string("from_state")->nullable();
            $table->string("to_state")->nullable();
            $table->string("from_country")->nullable();
            $table->string("to_country")->nullable();
            $table->string("from_phone")->nullable();
            $table->string("to_phone")->nullable();
            $table->string("from_email")->nullable();
            $table->string("to_email")->nullable();
            $table->string("status")->nullable();
            $table->string("weight")->nullable();
            $table->string("height")->nullable();
            $table->integer("price")->nullable();
            $table->string("expected_delivery_date")->nullable();
            $table->string("delivery_date")->nullable();
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
        Schema::dropIfExists('trackings');
    }
}
