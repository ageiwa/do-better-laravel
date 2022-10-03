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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_category')->constrained()->onDelete('cascade');
            $table->foreignId('id_user')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('status');
            $table->string('img_url');
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained()->onDelete('cascade');
            $table->string('title');
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
        Schema::dropIfExists('ads');
    }
};
