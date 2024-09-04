<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('merk')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('procurement_year')->nullable();
            $table->longText('spesification')->nullable();
            $table->string('condition')->nullable();
            $table->string('location')->nullable();
            $table->integer('active')->default(1);
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
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
