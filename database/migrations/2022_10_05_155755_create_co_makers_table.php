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
        Schema::create('co_makers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(RegularSpecialLoan::class)->nullable();
            $table->string('co_maker_history')->nullable();
            $table->string('co_maker_name')->nullable();
            $table->string('co_maker_form')->nullable();
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
        Schema::dropIfExists('co_makers');
    }
};
