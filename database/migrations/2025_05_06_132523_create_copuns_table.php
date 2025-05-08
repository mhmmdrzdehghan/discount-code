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
        Schema::create('copuns', function (Blueprint $table) {
            $table->id();
            $table->string('copun')->unique();
            $table->tinyInteger('percent');
            $table->integer('limit');  
            $table->date('expire_time');
            $table->bigInteger('copunable_id');
            $table->string('copunable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copuns');
    }
};
