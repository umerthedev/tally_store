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
        Schema::create('shopinfos', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('shop_phone');
            $table->string('shop_email')->nullable();
            $table->string('shop_category')->nullable();
            $table->string('shop_logo')->nullable();
            $table->string('shop_banner')->nullable();
            $table->string('shop_about')->nullable();
            $table->longText('messege')->nullable()->default('text');
            $table->string('user_id')->nullable();   
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
        Schema::dropIfExists('shopinfos');
    }
};
