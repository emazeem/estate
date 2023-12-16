<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('detail');
            $table->string('guide_title')->nullable();
            $table->longText('guide_detail')->nullable();
            $table->longText('guide_description')->nullable();
            $table->longText('growth')->nullable();
            $table->string('location')->nullable();
            $table->string('location_title')->nullable();
            $table->longText('location_description')->nullable();
            $table->string('location_image')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_description')->nullable();
            $table->longText('around_location')->nullable();
            $table->timestamps();
            //video
            //spotlight
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
