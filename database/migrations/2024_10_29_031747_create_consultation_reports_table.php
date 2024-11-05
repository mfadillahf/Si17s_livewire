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
        Schema::create('consultation_reports', function (Blueprint $table) {
            $table->id();
            $table->string('identity_number')->nullable();
            $table->string('name')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('started_at')->nullable();
            $table->date('finished_at')->nullable();
            $table->string('institute')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('solution')->nullable();
            $table->string('ticket_number')->nullable();
            $table->string('status')->nullable();
            $table->string('receipt')->nullable();
            $table->timestamps();

            $table->foreignId('media_report_id')
                ->constrained('media_reports')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('report_category_id')
                ->constrained('report_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultation_reports');
    }
};
