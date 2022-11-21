<?php

use App\Models\LoanApplication;
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
        Schema::create('regular_special_loans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LoanApplication::class);
            $table->string('name');
            $table->string('acc_id');
            $table->string('age');
            $table->date('dob');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('fb_acc');
            $table->string('emp');
            $table->string('phone_no');
            $table->string('length_service');
            $table->string('emp_status');
            $table->string('present_position');
            $table->string('s_name');
            $table->string('civilStatus');
            $table->string('tin');
            $table->string('sss');
            $table->string('email');
            $table->string('occupation');
            $table->string('no_child');
            $table->boolean('loan_cat')->comment('0 = regular, 1 = special');
            $table->boolean('loanApp_type')->comment('0 = online, 1 = walk-in');
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
        Schema::dropIfExists('regular_special_loans');
    }
};
