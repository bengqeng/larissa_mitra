<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_timeline', function (Blueprint $table) {
            $table->id();
            $table->enum('step_id', array_keys(\App\Models\MitraTimeline::MITRATIMELINE))->nullable(false);

            $table->uuid('mitra_id')->nullable(false);
            $table->foreign('mitra_id')->references('id')->on('mitra');

            $table->text('pending_message')->nullable(true);
            $table->text('success_message')->nullable(true);
            $table->enum('status', \App\Models\MitraTimeline::STATUSMITRATIMELINE)->nullable(false);
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
        Schema::dropIfExists('mitra_timeline');
    }
}
