<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 15, 2)->change(); // Mengubah tipe data price
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->change(); // Mengembalikan ke tipe data sebelumnya
        });
    }
};