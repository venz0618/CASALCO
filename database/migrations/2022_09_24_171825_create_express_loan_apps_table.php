<?php

use App\Models\LoanApplication;
use App\Models\User;
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
        Schema::create('express_loan_apps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LoanApplication::class);
            $table->string('name_of_member');
            $table->string('account_no');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('loan_type');
            $table->string('employer');
            $table->string('employer_address');
            $table->string('date_of_birth');
            $table->string('age');
            $table->string('cellphone_no');
            $table->string('tin_no');
            $table->string('email_address');
            $table->string('facebook_account');
            $table->integer('amount_applied');
            $table->integer('term_applied');
            $table->string('mode_of_payment');
            $table->string('scanned_signature');
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
        Schema::dropIfExists('express_loan_apps');
    }
};
