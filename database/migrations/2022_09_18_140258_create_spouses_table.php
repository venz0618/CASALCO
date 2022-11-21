<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\MembershipApplication;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('membership_application_id');
            $table->string('spouseFname');
            $table->string('spouseAge');
            $table->string('spouseOcc');
            $table->string('spouseMI');
            $table->string('spouseEmplrName');
            $table->string('spouseConNum');
            $table->string('spouse_mother');
            $table->foreign('membership_application_id')->references('id')->on('membership_applications')->onDelete('cascade');
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
        Schema::dropIfExists('spouses');
    }
};
