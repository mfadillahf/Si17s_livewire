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
        Schema::create('server_visitors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('server_visitor_report_id')
                ->constrained('server_visitor_reports')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('visitor_id')
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
        Schema::dropIfExists('server_visitors');
    }
};
