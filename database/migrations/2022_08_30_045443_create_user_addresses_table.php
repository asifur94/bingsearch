<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->text('house_present')->nullable();
            $table->text('house_permanent')->nullable();

            $table->text('village_present')->nullable();
            $table->text('village_permanent')->nullable();

            $table->text('union_present')->nullable();
            $table->text('union_permanent')->nullable();

            $table->text('post_office_present')->nullable();
            $table->text('post_office_permanent')->nullable();

            $table->text('post_office_number_present')->nullable();
            $table->text('post_office_number_permanent')->nullable();

            $table->text('thana_present')->nullable();
            $table->text('thana_permanent')->nullable();

            $table->text('district_present')->nullable();
            $table->text('district_permanent')->nullable();
            
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
        Schema::dropIfExists('user_addresses');
    }
}
