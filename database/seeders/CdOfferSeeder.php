<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdOfferSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_offers' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'What We Offer ?',
    'description' => '<p>CDigital objective is to provide diversified technological solutions to its customers. We specialize in designing, developing &amp; deploying technology based platforms including Data Centers, Data Networks, Software Solutions, Hydrological systems, Meteorological systems, Agro metrological systems, Biotech Systems, Electronic Security &amp; Safety and Renewable Energy solutions. CDigital also has a product division that is dedicatedly maintaining in-house developed enterprise software systems for its customers. Following divisions are providing state of art latest technology solutions to our customers;</p>

<ul class="list list-ok alt">
	<li>Information &amp; Communication Technology (ICT) &amp; Enterprise Software Systems Division</li>
	<li>Hydrological &amp; Meteorological Systems Division</li>
	<li>Bio Technology Systems Division</li>
	<li>Security, Surveillance &amp; Safety Systems Division</li>
	<li>Renewable Energy Solutions Division</li>
</ul>',
    'alt' => 'what we offer',
    'image' => 'upload/offer/VgmG9XVwVhJQDrmhQIXfFmO4t5n049aeZLkYEik9.jpg',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);
        DB::table('cd_offers')->insert($data);
    }
}
