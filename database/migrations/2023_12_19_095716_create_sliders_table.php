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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('starting_prize')->nullable();
            $table->string('btn_url')->nullable();
            $table->integer('order_by')->nullable();
            $table->boolean('status')->nullable()->comment('1= Active, 0= Inactive ');
            $table->date('deleted_at')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
