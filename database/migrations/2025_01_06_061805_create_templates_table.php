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
        Schema::create('templates', function (Blueprint $table) {
            $table->id('id_template');
            $table->string('name_templates'); // Nama template
            $table->text('description')->nullable(); // Deskripsi template
            $table->string('pictures')->nullable(); // Gambar template
            $table->unsignedBigInteger('id_category'); // Foreign key
            $table->boolean('status_templates')->default(true); // Status
            $table->text('fitur_templates')->nullable(); // Fitur template
            $table->string('file_templates')->nullable(); // File template
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_category')
                ->references('id_category')
                ->on('categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
