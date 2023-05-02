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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productCode');
            $table->string('productName');
            $table->unsignedInteger('supplierId');
            $table->unsignedInteger('categoryId');
            $table->enum('status', ['active', 'deactivate']);
            $table->unsignedInteger('taxCodeId');
            $table->unsignedInteger('discountId');
            $table->double('purchase_et', 8, 2);
            $table->double('sale_et', 8, 2);
            $table->integer('qty');
            $table->integer('stockAlertQty');
            $table->text('description');
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
};
