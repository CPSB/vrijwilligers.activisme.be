<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (! Schema::hasTable('volunteer_groups')) {
            Schema::create('volunteer_groups', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->text('short_description');
                $table->text('long_description')->nullable();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('volunteer_groups_volunteers')) {
            Schema::create('volunteer_groups_volunteers', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('volunteer_groups_id');
                $table->integer('volunteers_id');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteer_groups_volunteers');
        Schema::dropIfExists('volunteer_groups');
    }
}
