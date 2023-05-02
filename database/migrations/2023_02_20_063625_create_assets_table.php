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
        Schema::create('assets', function (Blueprint $table) {
            // $table->id();
            $table->uuid('id');
            $table->string('assetNumber');
            $table->string('assetName');
            $table->string('assetSlug');
            $table->text('assetDescription');
            $table->unsignedInteger('assetCategoryId');
            $table->unsignedInteger('assetSubCategoryId');
            $table->unsignedInteger('assetLocationId');
            $table->dateTime('assetDate');
            $table->unsignedInteger('assetUserId');
            $table->boolean('assetStatus');
            $table->string('assetImageUrl')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
};
