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
        // drop
        Schema::dropIfExists('purchLogs');

        Schema::create('purchLogs', function (Blueprint $table) {
            $table->id('log_id');
            $table->date('log_date');
            $table->time('log_time');
            $table->decimal('amount', 8, 2);
            $table->text('desc');
            $table->string('logType');
            $table->timestamps();  // Add this line
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchLogs');
    }
};
