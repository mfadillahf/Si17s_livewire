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
        Schema::create('troubleshoot_files', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->timestamps();

            $table->foreignId('troubleshoot_report_id')
                ->constrained('troubleshoot_reports')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troubleshoot_files');
    }
};
