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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('collection_id');
            $table->unsignedBigInteger('currency_id');
            $table->string('composition');
            $table->longText('description');
            $table->string('sizes');
            $table->double('price');
            $table->string('image_url');
            $table->integer('min_quantity');
            $table->boolean('new')->nullable()->default(false);
            $table->boolean('pop')->nullable()->default(false);
            $table->boolean('active')->nullable()->default(true);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->foreign('collection_id')->references('id')->on('collections')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
