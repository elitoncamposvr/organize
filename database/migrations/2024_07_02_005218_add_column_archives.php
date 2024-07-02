<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('archives', function (Blueprint $table) {
            $table->string('file_slug', 150);
        });
    }

    public function down(): void
    {
        Schema::table('archives', function (Blueprint $table) {
            //
        });
    }
};
