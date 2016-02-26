<?php namespace Fencus\Maps\Models;

use Model;
use Markdown;
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
			'latlng' => 'required', 'max:255',
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
    
    public function beforeSave()
    {
    	$this->info_window = Markdown::parse(trim($this->info_window_md));
    }

}