<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateJobListingWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_listing_websites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('website');
            $table->string('email');
            $table->text('password');
            $table->enum('status', ['Active','Archive', 'Deactivated','Deleted'])->nullable();            
            $table->string('deleted_at')->nullable();
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
        //
    }
}
