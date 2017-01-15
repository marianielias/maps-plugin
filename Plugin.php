<?php namespace Fencus\Maps;

use Backend;
use System\Classes\PluginBase;

/**
 * Maps Plugin Information File
 */
class Plugin extends PluginBase
{
	
	public $require = ['Fencus.GoogleMapsWidgets'];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'fencus.maps::lang.plugin.name',
            'description' => 'fencus.maps::lang.plugin.description',
            'author'      => 'Elias M. Mariani, Ariel M. Carrettoni',
            'icon'        => 'icon-map',
        	'homepage'    => 'http://www.fencus.com'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
	    return
	    [
            'Fencus\Maps\Components\Map' => 'map',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return 
        [
            'fencus.maps.access' => ['tab' => 'fencus.maps::lang.plugin.name', 'label' => 'fencus.maps::lang.plugin.access'],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
	public function registerNavigation()
    {
        return [
            'maps' => [
                'label'       => 'fencus.maps::lang.maps.menu_label',
                'url'         => Backend::url('fencus/maps/Maps'),
                'icon'        => 'icon-map',
                'permissions' => ['fencus.maps.*'],
                'order'       => 500,
            	'sideMenu' => [
            		'maps' => [
            				'label'       => 'fencus.maps::lang.maps.menu_label',
            				'icon'        => 'icon-map',
            				'url'         => Backend::url('fencus/maps/Maps'),
            				'permissions' => ['fencus.maps.*']
            		],
            		'locations' => [
            				'label'       => 'fencus.maps::lang.locations.menu_label',
            				'icon'        => 'icon-map-marker',
            				'url'         => Backend::url('fencus/maps/Locations'),
            				'permissions' => ['fencus.maps.*']
            		],
            	]
            ],
        ];
    }
}
