<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('recipes', function (Blueprint $t) {
            $t->id();
            $t->foreignId('user_id')->constrained()->cascadeOnDelete();
            $t->string('title');
            $t->string('slug')->unique();
            $t->text('description')->nullable();
            $t->unsignedSmallInteger('time_minutes')->default(30);
            $t->enum('difficulty',['1','2','3'])->default('1');
            $t->unsignedTinyInteger('servings')->default(2);
            $t->longText('steps');
            $t->string('image_path')->nullable();
            $t->enum('status',['draft','pending','published'])->default('pending');
            $t->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('recipes'); }
};