<?php namespace Fencus\Maps\Models;

use Model;

/**
 * Location Model
 */
class Location extends Model
{

	/*
	 * Validation
	 */
	use \October\Rain\Database\Traits\Validation;
	public $rules = [
			'name' => ['required', 'max:255'],
			'location' => 'required', 'max:255',
	];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'fencus_maps_locations';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];
	
    protected $hidden = [
    		'id',
    		'content',
    		'created_at',
    		'updated_at',
    		'pivot'
		];
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
    		'maps' => [
    			'Fencus\Maps\models\Map',
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