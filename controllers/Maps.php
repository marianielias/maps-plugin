<?php namespace Fencus\Maps\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Fencus\GoogleMapsWidgets\Models\Settings as MapsSettings;
use Fencus\Maps\Models\Map as MapModel;
use Backend;
use Lang;
use Flash;

/**
 * Maps Back-end Controller
 */
class Maps extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    	'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';
	
    public $api_key;
    
    public function __construct()
    {
    	$this->api_key = MapsSettings::get('api_key');
    	
    	
        parent::__construct();
        
        BackendMenu::setContext('Fencus.Maps', 'maps', 'maps');
    }
    
    public function index()
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));
    
    	$this->asExtension('ListController')->index();
    }
    
    public function create()
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));

    	return $this->asExtension('FormController')->create();
    }
    
    public function update($recordId = null)
    {
    	if(!$this->api_key)
    		return Redirect(Backend::url('system/settings/update/fencus/googlemapswidgets/settings'));

    	return $this->asExtension('FormController')->update($recordId);
    }
    
    public function index_onDelete()
    {
    	if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
    
    		foreach ($checkedIds as $checkedId) {
    			if ((!$object = MapModel::find($checkedId)))
    				continue;
    				$object->delete();
    		}
    
    		Flash::success(Lang::get('fencus.maps::lang.maps.success_delete'));
    	}
    
    	return $this->listRefresh();
    }

}