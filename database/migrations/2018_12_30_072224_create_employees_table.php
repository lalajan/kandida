<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('father_name');
            $table->integer('age');
            $table->string('phone')->unique();
            $table->string('education');
            $table->text('address');
            $table->string('employee_photo');
            $table->string('tazkira_photo');
            $table->string('reality_province');
            $table->string('current_province');
            $table->string('reality_city');
            $table->string('current_city');
            $table->string('reality_district');
            $table->string('current_district');
            $table->string('bondsman')->nullable();
            $table->string('guranty_photo');
            $table->string('user_name')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
