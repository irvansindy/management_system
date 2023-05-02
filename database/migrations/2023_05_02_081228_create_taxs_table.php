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
        Schema::create('taxs', function (Blueprint $table) {
            $table->id();
            $table->string('taxName');
            $table->string('taxCode');
            $table->enum('type', ['exclusive', 'inclusive']);
            $table->enum('status', ['active', 'deactivate']);
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
        Schema::dropIfExists('taxs');
    }
};
