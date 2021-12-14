<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_assets', function (Blueprint $table) {
            $table->id('system_assets_id');
            
            $table->unsignedBigInteger('asset_type_id');
            $table->foreign('asset_type_id')->references('asset_types_id')->on('asset_types');

            $table->string('asset_name');
            $table->integer('is_latest_logo');
            $table->integer('is_latest_banner');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('users_id')->on('users');

            $table->unsignedBigInteger('page_type_id');
            $table->foreign('page_type_id')->references('page_types_id')->on('page_types');

            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('organizations_id')->on('organizations');            


            $table->boolean('status');


            $table->boolean('is_latest_image')->nullable();

            $table->unsignedBigInteger('events_id')->nullable();
            $table->foreign('events_id')->references('event_id')->on('events');

            $table->unsignedBigInteger('announcement_id')->nullable();
            $table->foreign('announcement_id')->references('announcements_id')->on('announcements');

            $table->unsignedBigInteger('articles_id')->nullable();
            $table->foreign('articles_id')->references('articles_id')->on('articles');


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
        Schema::dropIfExists('system_assets');
    }
}
