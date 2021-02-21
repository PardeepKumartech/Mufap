<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tbl01Amc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl01_amc', function (Blueprint $table) {
            
            $table->timestamps();
			$table->softDeletes();
			$table->bigIncrements('id');
			$table->string('AMCName', 100)->nullable();
			$table->integer('FKAMCTypeID', 100)->nullable();
			$table->string('AMCAddress', 100)->nullable();
			$table->string('AMCContact', 100)->nullable();
			$table->string('AMCEmailAddress', 100)->nullable();
			$table->date('AMCIncorporationDate')->nullable();
			$table->integer('FKAuditorID', 100)->nullable();
			$table->date('AMCClosingDate', 100)->nullable();
			$table->date('MemberSince')->nullable();
			$table->string('AMCFax', 100)->nullable();
			$table->integer('FKRatingAgencyID', 100)->nullable();
			$table->string('URL', 100)->nullable();
			$table->string('CEOName', 100)->nullable();
			$table->string('ShortCode', 100)->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl01_amc');
    }
}
