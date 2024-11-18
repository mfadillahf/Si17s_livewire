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
        Schema::create('server_asset_flows', function (Blueprint $table) {
            $table->id();
            $table->date('entered_date')->nullable();
            $table->date('exited_date')->nullable();
            $table->timestamps();

            $table->foreignId('server_asset_id')
                ->constrained('server_assets')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('server_asset_category_id')
                ->constrained('server_asset_categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('server_visitor_report_id')
                ->constrained('server_visitor_reports')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_asset_flows');
    }
};
