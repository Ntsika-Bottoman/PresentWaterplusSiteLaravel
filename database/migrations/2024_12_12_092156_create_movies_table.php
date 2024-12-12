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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string("name", 255)->nullable();
            $table->text("director")->nullable();
            $table->text("director1")->nullable();
            $table->text("director2")->nullable();
            $table->text("director3")->nullable();
            $table->text("director4")->nullable();
            $table->text("director5")->nullable();
            $table->text("director6")->nullable();
            $table->string("poster", 255)->nullable();
            $table->decimal("price", 6, 2);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
