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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', PropertyStatus::getPropertyModerationStatus())->default(PropertyStatus::PENDING);
            $table->text('description');
            $table->string('image');
            $table->string('country');
            $table->string('city');
            $table->string('property_location');
            $table->string('lant');
            $table->string('lng');
            $table->integer('no_of_bedrooms');
            $table->integer('no_of_floors');
            $table->integer('area_square');
            $table->string('currency');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->enum('status', PropertyStatus::getPropertyStatus())->default(PropertyStatus::NOT_AVAILABLE);
            $table->unsignedBigInteger('category');
            $table->string('unique_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('account_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
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
        Schema::dropIfExists('properties');
    }
};
