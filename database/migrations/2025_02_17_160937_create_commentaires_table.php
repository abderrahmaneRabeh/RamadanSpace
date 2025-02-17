<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id('id_commentaire');
            $table->text('contenu');
            $table->date('date_creation');
            $table->unsignedBigInteger('id_pub');
            $table->foreign('id_pub')->references('id_pub')->on('publications')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
