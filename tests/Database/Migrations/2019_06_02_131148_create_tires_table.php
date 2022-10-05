<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tires', static function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->integer('profile_depth');

            $table->unsignedBigInteger('car_user_id');
            $table->foreign('car_user_id')->references('id')->on('car_user')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tires');
    }
}