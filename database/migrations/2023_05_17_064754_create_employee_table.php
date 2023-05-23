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
        Schema::create('employee', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('genter');
            $table->integer('age');
            $table->string('email');
            $table->biginteger('phone_no');
            $table->string('quali[]');
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
        Schema::dropIfExists('employee');
    }
};
