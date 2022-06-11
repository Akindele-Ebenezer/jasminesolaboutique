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
        Schema::create('singlets', function (Blueprint $table) {
            $table->string('Id');
            $table->string('Name');
            $table->string('Price');
            $table->string('Image');
            $table->string('Description');
            $table->string('ProductDetail');
            $table->timestamps();
            $table->string('ProductType');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singlets');
    }
};
