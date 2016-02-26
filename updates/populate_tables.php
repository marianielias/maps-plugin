<?php namespace Fencus\Maps\Updates;

use Fencus\Maps\Models\Map;
use Fencus\Maps\Models\Location;
use October\Rain\Database\Updates\Seeder;
use Db;
class SeedAllTables extends Seeder
{

	public function run()
	{
		Location::create([
				'name' => 'Louvre Museum',
				'address' => 'Louvre Museum, Paris, France',
				'latlng' => '{"lat":48.8606111,"lng":2.3376439999999548}',
				'info_window_md' => '[Louvre WebSite](http://www.louvre.fr/en)',
				'info_window' => '<p><a href="http://www.louvre.fr/en">Louvre website</a></p>',
		]);
		
		Location::create([
				'name' => 'Eiffel Tower',
				'address' => 'Eiffel Tower, Avenue Anatole France, Paris, France',
				'latlng' => '{"lat":48.8582606,"lng":2.2945071000000326}',
				'info_window_md' => '![](http://www.toureiffel.paris/images/galerie/photos/vignette/06_Tour-de-jour-rapprochee-SETE-Photographe-Bertrand-Michau.png)',
				'info_window' => '<p><img src="http://www.toureiffel.paris/images/galerie/photos/vignette/06_Tour-de-jour-rapprochee-SETE-Photographe-Bertrand-Michau.png" alt="" /></p>',
		]);
		
		Location::create([
				'name' => 'Notre Dame de Paris',
				'address' => 'Notre-Dame de Paris, Parvis Notre Dame - Place Jean-Paul II, Paris, France',
				'latlng' => '{"lat":48.85296820000001,"lng":2.3499021000000084}',
				'info_window_md' => 'Is a historic Catholic cathedral on the eastern half of the Île de la Cité in the fourth arrondissement of Paris, France.',
				'info_window' => '<p>Is a historic Catholic cathedral on the eastern half of the Île de la Cité in the fourth arrondissement of Paris, France.</p>',
		]);
		
		Location::create([
				'name' => 'Colosseum',
				'address' => 'Piazza del Colosseo, Roma, Italy',
				'latlng' => '{"lat":41.88988519999999,"lng":12.493983699999944}',
				'info_window_md' => '![](https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Colosseum_in_Rome%2C_Italy_-_April_2007.jpg/250px-Colosseum_in_Rome%2C_Italy_-_April_2007.jpg)',
				'info_window' => '<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Colosseum_in_Rome%2C_Italy_-_April_2007.jpg/250px-Colosseum_in_Rome%2C_Italy_-_April_2007.jpg" alt="" /></p>',
		]);
		
		Location::create([
				'name' => "Castel Sant'Angelo",
				'address' => "Castel Sant'Angelo, Lungotevere Castello, Roma, Italy",
				'latlng' => '{"lat":41.90306319999999,"lng":12.466275999999993}',
				'info_window_md' => "**[More Info.](https://en.wikipedia.org/wiki/Castel_Sant_Angelo)**",
				'info_window' => '<p><strong><a href="https://en.wikipedia.org/wiki/Castel_Sant_Angelo">More Info.</a></strong></p>',
		]);
		
		Location::create([
				'name' => 'Piazza San Pietro',
				'address' => 'Piazza San Pietro, Vatikano Hiria, Vatican City',
				'latlng' => '{"lat":41.9022207,"lng":12.456799199999978}',
				'info_window_md' => "***St. Peter's Square*** is a large plaza located directly in front of *St. Peter's Basilica* in the *Vatican City*, the papal enclave inside *Rome*, directly west of the neighbourhood or rione of *Borgo*.",
				'info_window' => "<p><strong><em>St. Peter's Square</em></strong> is a large plaza located directly in front of <em>St. Peter's Basilica</em> in the <em>Vatican City</em>, the papal enclave inside <em>Rome</em>, directly west of the neighbourhood or rione of <em>Borgo</em>.</p>",
		]);
		
		Map::create([
				'name' => 'Paris Map',
				'options' => '{"mapTypeId":"roadmap","zoom":14,"center":{"lat":48.85799973002952,"lng":2.3241492741058334},"mapTypeControl":true,"fullscreenControl":false,"streetViewControl":true,"zoomControl":true,"scrollwheel":true,"zoomControlOptions":{"position":"9","style":0},"mapTypeControlOptions":{"mapTypeIds":["roadmap"],"position":"1","style":"0"}}',
				'height' => '300px',
				'width' => '100%',
		]);
		
		Map::create([
				'name' => 'Rome Map',
				'options' => '{"mapTypeId":"roadmap","zoom":14,"center":{"lat":41.89713348467646,"lng":12.476460599179076},"mapTypeControl":true,"fullscreenControl":false,"streetViewControl":true,"zoomControl":true,"scrollwheel":true,"zoomControlOptions":{"position":"9","style":0},"mapTypeControlOptions":{"mapTypeIds":["roadmap"],"position":"1","style":"0"}}',
				'height' => '300px',
				'width' => '100%',
		]);
		
		Db::table('fencus_maps_map_location')->insert(['map_id' => '1', 'location_id' => '1']);
		Db::table('fencus_maps_map_location')->insert(['map_id' => '1', 'location_id' => '2']);
		Db::table('fencus_maps_map_location')->insert(['map_id' => '1', 'location_id' => '3']);
		Db::table('fencus_maps_map_location')->insert(['map_id' => '2', 'location_id' => '4']);
		Db::table('fencus_maps_map_location')->insert(['map_id' => '2', 'location_id' => '5']);
		Db::table('fencus_maps_map_location')->insert(['map_id' => '2', 'location_id' => '6']);
		
		
	}

}
