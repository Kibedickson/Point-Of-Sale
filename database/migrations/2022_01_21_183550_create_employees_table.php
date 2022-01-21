<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('payroll_number');
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->string('designation');
            $table->integer('id_number');
            $table->date('joined_at');
            $table->string('kra_pin')->nullable();
            $table->string('nhif_no')->nullable();
            $table->string('nssf_no')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('hourly_rate')->nullable();
            $table->string('payment_type');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
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
