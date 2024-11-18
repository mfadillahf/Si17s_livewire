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
        Schema::create('server_visitor_reports', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->dateTime('entered_at')->nullable();
            $table->dateTime('exited_at')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();

            $table->foreignId('institute_id')
                ->nullable()
                ->constrained('institutes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_visitor_reports');
    }
};
