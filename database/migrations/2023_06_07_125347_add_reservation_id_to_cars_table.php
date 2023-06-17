<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('reservation_id')->nullable();
            $table->foreign('reservation_id')->references('id')->on('reservations');

            $table->unsignedBigInteger('insu_id')->nullable();
            $table->foreign('insu_id')->references('id')->on('insurances')->onDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropForeign(['reservation_id']);
            $table->dropColumn('reservation_id');
            $table->dropForeign(['insu_id']);
            $table->dropColumn('insu_id');
        });
    }
};
