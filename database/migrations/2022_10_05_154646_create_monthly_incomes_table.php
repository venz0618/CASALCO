<?php

use App\Models\RegularSpecialLoan;
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
        Schema::create('monthly_incomes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RegularSpecialLoan::class);
            $table->string('borrower_income');
            $table->string('other_income');
            $table->string('s_income');
            $table->string('loan_type');
            $table->string('amount');
            $table->string('term_applied');
            $table->string('mode_payment');
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
        Schema::dropIfExists('monthly_incomes');
    }
};
