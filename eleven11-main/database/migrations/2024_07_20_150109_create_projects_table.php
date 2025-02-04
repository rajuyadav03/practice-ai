<?php

use App\Enums\PropertyStatus;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->boolean('is_featured');
            $table->string('image');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('location_url');
            $table->string('lat');
            $table->string('lng');
            $table->integer('number_of_blocks');
            $table->integer('max_price');
            $table->integer('currency_id');
            $table->integer('distance_btwn_facilities');
            $table->text('meta_keyword');
            $table->text('meta_description');
            $table->enum('status', PropertyStatus::getPropertyStatus())->default(PropertyStatus::NOT_AVAILABLE);
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
        Schema::dropIfExists('projects');
    }
};
