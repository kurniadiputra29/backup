<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('id_card')->unique();
            $table->string('renter');
            $table->string('address');
            $table->string('phone');
            $table->string('item_code');
            $table->integer('qty');
            $table->integer('price_total');
            $table->integer('periode');
            $table->date('deadline');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('payment_id');
            $table->timestamps();

            $table->foreign('item_code')->references('code')->on('items')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rentals');
    }
}
