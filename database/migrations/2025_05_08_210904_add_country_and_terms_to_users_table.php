<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable(); // 'country' as a string, nullable in case of future flexibility
            $table->boolean('terms')->default(false); // 'terms' as a boolean for acceptance status
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['country', 'terms']); // Rollback by dropping the columns
        });
    }
};