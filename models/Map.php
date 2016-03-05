<?php namespace Fencus\Maps\Models;

use Fencus\GoogleMapsWidgets\Models\Settings as MapsSettings;
use Lang;
use Model;

/**
 * Map Model
 */
class Map extends Model
{
	
	/*
	 * Validation
	 */
	public $implement = [
			'Fencus.GoogleMapsWidgets.Behaviors.Map',
	];
	
	use \October\Rain\Database\Traits\Validation;
	public $rules = [
			'name' => ['required', 'max:255'],
			'options' => 'required',
	];
	/**
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fencus_maps_maps';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
    		'locations' => [
    				'Fencus\Maps\models\Location',
    				'table' => 'fencus_maps_map_location',
    				'order' => 'name'
    		],
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}