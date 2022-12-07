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
        Schema::create('accounts', function (Blueprint $table) {
            $table->string('unid')->unique();
            $table->string('id_num')->unique();
            $table->string('first_name');
            $table->string('family_name');
            $table->string('email_add')->unique();
            $table->string('country_code');
            $table->string('phone_number')->unique();
            $table->string('acc_pass');
            $table->string('acc_type');
            $table->string('job_title');
            $table->string('b_month')->nullable();
            $table->integer('b_day')->nullable();
            $table->integer('b_year')->nullable();
            $table->string('birthday')->nullable();
            $table->string('prof_dir');
            $table->string('reg_by');
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
        Schema::dropIfExists('accounts');
    }
};
