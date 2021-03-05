<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParishadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parishads', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('designation', 150)->nullable();
            $table->string('fathers_name', 150)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('cell', 100)->nullable();
            $table->integer('serial')->default(50);
            $table->string('image')->default('avatar.png');
            $table->enum('status', ['a', 'd'])->default('a');
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
        Schema::dropIfExists('parishads');
    }
}
