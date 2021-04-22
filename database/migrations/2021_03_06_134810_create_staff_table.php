<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable();
            $table->string('designation', 150)->nullable();
            $table->string('father', 150)->nullable();
            $table->string('mother', 150)->nullable();
            $table->string('address', 150)->nullable();
            $table->enum('marriage_status', [1, 0])->default(1);
            $table->string('chil_boy', 150)->nullable();
            $table->string('chil_girl', 150)->nullable();
            $table->string('joining_date', 150)->nullable();
            $table->string('office_phone', 150)->nullable();
            $table->string('personal_phone', 150)->nullable();
            $table->string('email', 150)->nullable();
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
        Schema::dropIfExists('staff');
    }
}
