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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('npwp')->nullable();
            $table->string('company_name');
            $table->string('directur_name')->nullable();
            $table->string('directur_identity_number')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('date')->nullable();
            $table->integer('active')->nullable();
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
        //
    }
};
