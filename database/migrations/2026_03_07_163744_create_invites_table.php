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
        Schema::create('invites', function (Blueprint $table) {
            $table->id();

            $table->foreignId('mariage_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('nom');

            $table->string('email')->nullable();

            $table->string('telephone')->nullable();

            $table->string('presence')
                ->default('en_attente');

            $table->unsignedBigInteger('table_id')
                ->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invites');
    }
};
