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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_slug');
            $table->text('short_description')->nullable()->comment('Short description of the page');
            $table->text('long_description')->nullable()->comment('Long description of the page');
            $table->text('meta_title')->nullable()->comment('Meta title of the page');
            $table->text('meta_keywords')->nullable()->comment('Meta keywords of the page');
            $table->text('meta_description')->nullable()->comment('Meta description of the page');
            $table->boolean('is_active')->default(false)->comment('Is page active or not');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
