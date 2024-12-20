<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('consultation_documents', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->timestamps();

            $table->foreignId('consultation_report_id')
                ->constrained('consultation_reports')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_documents');
    }
};
