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
        Schema::create('troubleshoot_reports', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('description')->nullable();
            $table->string('action')->nullable();
            $table->timestamps();

            $table->foreignId('troubleshoot_category_id')
                ->constrained('troubleshoot_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('visitor_id')
                ->nullable()
                ->constrained('visitors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('troubleshoot_reports');
    }
};
