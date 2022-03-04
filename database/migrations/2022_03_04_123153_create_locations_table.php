<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->timestamps();
            $table->datetime('DateDeLocation');
            $table->datetime('DateDeRetour');
            $table->bigInteger('numLocation');
            $table->String('emailUser');
            $table->boolean('Status');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('voiture_id')->constrained()->cascadeOnDelete();
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
};
