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
        Schema::create('bbs', function (Blueprint $table) {
            $table->id(); // idカラム（自動インクリメントの主キー）
            $table->string('name'); // nameカラム（VARCHAR(255)）
            $table->string('title')->nullable(); // titleカラム（VARCHAR(255), NULL可能）
            $table->text('body'); // bodyカラム（TEXT）
            $table->timestamp('date'); // dateカラム（DATETIME）
            $table->string('pass', 255); // 文字列（255文字まで）
            $table->timestamps(); // ここで追加
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bbs');
    }
};
