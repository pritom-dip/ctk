<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('site_name')->nullable();
            $table->string('mayor_name')->nullable();
            $table->string('mayor_image')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('app_image')->nullable();
            $table->string('app_url')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('twiter_url')->nullable();
            $table->string('linkdin_url')->nullable();
            $table->string('google_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('home_settings');
    }
}
