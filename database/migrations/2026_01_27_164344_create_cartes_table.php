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
        Schema::create('cartes', function (Blueprint $table) {
            $table->id();
            // Clé étrangère liée à la table etudiants
            $table->foreignId('etudiant_id')->constrained('etudiants')->onDelete('cascade');
            $table->string('numero_carte', 100)->unique();
            $table->string('qr_code', 255)->nullable(); // nullable si généré plus tard
           // Type ENUM avec valeur par défaut
            $table->enum('statut', ['active', 'suspendue', 'expiree'])->default('active');
            $table->date('date_creation');
            $table->date('date_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes');
    }
};
