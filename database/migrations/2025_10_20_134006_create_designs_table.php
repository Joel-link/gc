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
       Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // 'banniere', 'icone', 'texte', etc.
            $table->string('cle')->unique(); // ex: 'homepage_banner', 'footer_icon'
            $table->text('valeur'); // chemin image, texte HTML, etc.
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
