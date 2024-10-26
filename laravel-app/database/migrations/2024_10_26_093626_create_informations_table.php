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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('objectives');
            $table->string('birthday');
            $table->string('birthplace');
            $table->string('age');
            $table->string('religion');
            $table->string('civil_status');
            $table->string('citizenship');
            $table->longtext('education');
            $table->longtext('skills');
            $table->longtext('awards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
