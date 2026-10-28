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
        Schema::create('mariages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('nom_marie');
            $table->string('nom_mariee');

            $table->date('date_mariage');

            $table->string('lieu');

            $table->integer('nombre_invites')->nullable();

            $table->decimal('budget', 12, 2)->default(0);

            $table->string('status')->default('en_attente');

            $table->text('description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mariages');
    }
};
