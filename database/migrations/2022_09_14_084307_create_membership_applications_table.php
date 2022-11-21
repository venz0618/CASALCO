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
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('suffix')->nullable();
            $table->string('gender');
            $table->date('dob');
            $table->string('Bplace');
            $table->string('address');
            $table->string('unit');
            $table->string('Occu');
            $table->string('educ');
            $table->string('MI');
            $table->string('civilStatus');
            $table->string('religion');
            $table->string('contact_number');
            $table->string('TIN');
            $table->string('SSSnum');
            $table->string('email');
            $table->string('Dependents');
            $table->string('acc_id')->unique()->nullable();
            $table->string('or_no')->nullable();
            $table->string('mothers_maiden_name');
            $table->string('selfie_pic',300);
            $table->string('empIDpic');
            $table->integer('is_approved')->default(0);
            $table->boolean('membership_type')->comment('0 = online, 1 = walk-in');
            $table->string('assigned_officer')->nullable();
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
        Schema::dropIfExists('membership_applications');
    }
};
