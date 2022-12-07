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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('about_heading');
            $table->text('about_content');
            $table->text('about_status');
            $table->text('terms_heading');
            $table->text('terms_content');
            $table->text('terms_status');
            $table->text('privacy_heading');
            $table->text('privacy_content');
            $table->text('privacy_status');
            $table->text('contact_heading');
            $table->text('contact_map')->nullable();
            $table->text('contact_status');
            $table->text('cart_heading');
            $table->text('cart_status');
            $table->text('checkout_heading');
            $table->text('checkout_status');
            $table->text('payment_heading');
            $table->text('signup_heading');
            $table->text('signup_status');
            $table->text('signin_heading');
            $table->text('signin_status');

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
        Schema::dropIfExists('pages');
    }
};
