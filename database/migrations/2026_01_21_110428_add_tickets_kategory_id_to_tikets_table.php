<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('tikets', function (Blueprint $table) {
            $table->foreignId('tickets_kategory_id')
                  ->after('event_id')
                  ->constrained('tickets_kategories')
                  ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('tikets', function (Blueprint $table) {
            $table->dropForeign(['tickets_kategory_id']);
            $table->dropColumn('tickets_kategory_id');
        });
    }
};
