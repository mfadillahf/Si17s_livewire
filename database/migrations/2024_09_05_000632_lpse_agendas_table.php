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
        Schema::create('lpse_agendas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('started_at')->nullable();
            $table->date('finished_at')->nullable();
            $table->longText('description')->nullable();
            $table->text('employee_tagging')->nullable();
            $table->timestamps();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lpse_agendas');
    }
};
