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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('service_id');
            $table->tinyInteger('note')->unsigned()->checkBetween(1, 5); // Laravel 10+ syntax
            $table->text('texte')->nullable();
            $table->timestamps();

            // Clés étrangères
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
        DB::statement('ALTER TABLE commentaires ADD CONSTRAINT check_note_range CHECK (note BETWEEN 1 AND 5)');

    }
};
