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
        Schema::create('item_maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();

            $table->foreignId('item_id')
                ->constrained('items')
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
        Schema::dropIfExists('item_maintenances');
    }
};
