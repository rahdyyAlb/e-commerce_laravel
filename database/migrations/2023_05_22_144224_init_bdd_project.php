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
        schema::create('product',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->string('img');


        });
        schema::create('commande',function (Blueprint $table){
            $table->id();
            $table->string('product');
            $table->dateTime('date_commande');
            $table->integer('numero_commande');
            $table->float('price');
            $table->foreignId('users_id')
                ->constrained('users')
                ->references('id')
                ->on('users');

        });
        schema::create('detail',function (Blueprint $table){
            $table->foreignId('commande_id')
                ->constrained('commande')
                ->references('id')
                ->on('commande');
            $table->foreignId('product_id')
                ->constrained('product')
                ->references('id')
                ->on('product');

        });

        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
        Schema::dropIfExists('commande');
        Schema::dropIfExists('detail');




    }
};
