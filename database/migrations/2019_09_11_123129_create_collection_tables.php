<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionTables extends Migration
{
    /**
     * Create the collection tables & shared columns. Campaigns, levies, subs, tables (merch)
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->date('collected_on')->useCurrent();
        });

        Schema::create('levy_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->date('collected_on')->useCurrent();
        });

        Schema::create('subs_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->date('collected_on')->useCurrent();
        });

        Schema::create('table_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->date('collected_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_collections');
        Schema::dropIfExists('levy_collections');
        Schema::dropIfExists('subs_collections');
        Schema::dropIfExists('table_collections');
    }
}
