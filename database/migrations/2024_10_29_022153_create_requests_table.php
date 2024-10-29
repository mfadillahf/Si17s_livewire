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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('document_number')->nullable();
            $table->date('start_period')->nullable();
            $table->date('end_period')->nullable();
            $table->string('document')->nullable(); //Surat Permohonan
            $table->string('institute')->nullable();
            $table->longText('audited_packages')->nullable();
            $table->integer('is_auditor')->default(0)->nullable();
            $table->timestamps();

            $table->foreignId('institute_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('document_archive_id')
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
        Schema::dropIfExists('requests');
    }
};
