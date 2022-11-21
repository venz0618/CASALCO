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
        Schema::create('monthly_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RegularSpecialLoan::class);
            $table->string('food_sub');
            $table->string('educ_bill');
            $table->string('electric_bill');
            $table->string('water_bill');
            $table->string('transportation');
            $table->string('allowance');
            $table->string('others');

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
        Schema::dropIfExists('monthly_expenses');
    }
};
