<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'plants';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection($this->connection)->table('plants', function (Blueprint $table) {
            // Drop the foreign key and category_id column
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');

            // Add category name as a string column
            $table->string('category_name');

            // Add image URL column
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection($this->connection)->table('plants', function (Blueprint $table) {
            // Reverse the changes - add back the foreign key relationship
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');

            // Remove the columns we added
            $table->dropColumn('category_name');
            $table->dropColumn('image_url');
        });
    }
};
