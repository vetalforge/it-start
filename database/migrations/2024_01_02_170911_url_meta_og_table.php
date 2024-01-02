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
        Schema::create('url_meta_og', function (Blueprint $table) {
            $table->id();
            $table->foreignId('url_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('title_ua');
            $table->string('title_ru');
            $table->string('description_ua');
            $table->string('description_ru');
            $table->string('image_ua');
            $table->string('image_ru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('url_meta_og');
    }
};
