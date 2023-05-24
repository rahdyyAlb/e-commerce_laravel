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
        schema::create('products',function (Blueprint $table){
            $table->id();
            $table->dateTime('created_at')->default(now());
            $table->dateTime('updated_at')->nullable();
            $table->string('name');
            $table->float('price');
            $table->string('detail');
            $table->string('img')->default('nul');


        });
        schema::create('commandes',function (Blueprint $table){
            $table->id();
            $table->string('product');
            $table->dateTime('date_commande');
            $table->integer('numero_commande');
            $table->float('price')->default(0);
            $table->foreignId('users_id')
                ->constrained('users')
                ->references('id')
                ->on('users');

        });
        schema::create('detail',function (Blueprint $table){
            $table->id();
            $table->foreignId('commandes_id')
                ->constrained('commandes')
                ->references('id')
                ->on('commandes');
            $table->foreignId('products_id')
                ->constrained('products')
                ->references('id')
                ->on('products');
            $table->float('price');
            $table->integer('quantité');

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
