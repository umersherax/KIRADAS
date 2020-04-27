<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostExtend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('covered_area')->nullable();
            $table->integer('num_of_products')->nullable();
            $table->integer('CC')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('mess')->nullable();
            $table->boolean('wifi')->nullable();
            $table->integer('washroom')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('num_of_portions')->nullable();
            $table->string('exact_address');
            $table->string('area');
            $table->integer('parent');
            $table->integer('rent_price');
            $table->boolean('active')->nullable();
            $table->string('phone_no');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function ( $table) {
            $table->dropColumn('covered_area');
            $table->dropColumn('num_of_products');
            $table->dropColumn('CC');
            $table->dropColumn('parking');
            $table->dropColumn('mess');
            $table->dropColumn('wifi');
            $table->dropColumn('washroom');
            $table->dropColumn('beds');
            $table->dropColumn('num_of_portions');
            $table->dropColumn('exact_address');
            $table->dropColumn('area');
            $table->dropColumn('parent');
            $table->dropColumn('rent_price');
            $table->dropColumn('active');
            $table->dropColumn('phone_no');

            //
        });
    }
}
