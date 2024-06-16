<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 100);
            $table->string('cpf_cnpj')->nullable();
            $table->string('responsible_name');
            $table->string('phone')->nullable();
            $table->string('cellphone');
            $table->string('email');
            $table->integer('plan_id')->default('0');
            $table->boolean('is_active')->default('1');
            $table->date('access_expiration')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
