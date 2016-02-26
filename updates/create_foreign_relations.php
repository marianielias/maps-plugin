<?php namespace Fencus\Maps\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateForeignRelations extends Migration
{

    public function up()
    {
        Schema::table('fencus_maps_map_location', function ($table)
        {
        	$table->foreign('map_id')->references('id')->on('fencus_maps_maps')->onDelete('cascade');
        	$table->foreign('location_id')->references('id')->on('fencus_maps_locations')->onDelete('cascade');
        });
    }
    
    public function down()
    {
    	
    }

}
