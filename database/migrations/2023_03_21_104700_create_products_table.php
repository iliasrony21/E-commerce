<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
//     id int (11) primary key autoincrement,
// name varchar (255),
// category_name varchar (255),
// brand_name varchar (255),
// description text,
// image text,
// status tinyinteger (1) default (1)
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category_name');
            $table->string('brand_name');
            $table->text('description');
            $table->text('image');
            $table->tinyinteger('status')->default("1");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
