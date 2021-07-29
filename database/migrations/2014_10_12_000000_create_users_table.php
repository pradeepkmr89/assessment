<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
             $table->string('name')->nullable();
             $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->date('dob')->nullable();
            $table->char('gender',6)->nullable();
            $table->string('occupation')->nullable();
            $table->string('fam_type')->nullable();
            $table->enum('manglik', array('Y', 'N'))->default('N');
            $table->decimal('income',8,2)->unsigned()->default(0)->nullable();

            $table->string('partner_occupation')->nullable();
            $table->string('partner_income_from')->nullable();
            $table->string('partner_income_to')->nullable();
            $table->string('partner_fam_type')->nullable();
            $table->enum('partner_manglik', array('Y', 'N'))->default('N');

            $table->string('google_id')->nullable();


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
        Schema::dropIfExists('users');
    }
}
