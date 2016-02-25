<?php namespace Fencus\Maps\Components;

use Cms\Classes\ComponentBase;
use Lang;
use Fencus\GoogleMapsWidgets\Models\Settings as MapsSettings;
use Fencus\Maps\Models\Map as MapModel;

class Map extends ComponentBase
{
	public $message;
	public $html;
	
    public function componentDetails()
    {
        return [
            'name'        => 'fencus.maps::lang.map_component.name',
            'description' => 'fencus.maps::lang.map_component.description'
        ];
    }

    public function defineProperties()
    {
        return [
        		'map' => [
        				'title'       => 'fencus.maps::lang.map_component.map_property',
        				'type'        => 'dropdown',
        				'default'     => ''
        		],
        ];
    }
    
    public function getMapOptions()
    {
    	return MapModel::lists('name', 'id');
    }
    
    public function onRun()
    {
    	$map = MapModel::find($this->property('map'));
    	$apiKey = MapsSettings::get('api_key');
    	if($map)
    	{
    		if($apiKey)
    		{
    			$this->html = $map->getHtmlMap($this->alias,$map->locations);
    		}
    		else
    		{
    			$this->message = Lang::get('fencus.googlemapswidgets::lang.settings.key_not_defined');
    		}
    	}
    	else
    	{
    		$this->message = Lang::get('fencus.maps::lang.map_component.map_not_defined');
    	}
    }

}