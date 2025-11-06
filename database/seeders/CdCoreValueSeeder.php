<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdCoreValueSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_core_values' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'About Us',
    'description' => '<p>CDigital started its journey as an ICT company in 2003, having a quick growth, Security &amp; Surveillance division was added in 2005. Having more than 15 years in business, CDigital is now a progressive technology company having ICT &amp; Enterprise Software Systems, HydroMet, Biotech, Security &amp; Surveillance and Renewable Energy divisions. We are consistently developing/providing innovative and intelligent business/technological solutions for our national and international customers. Our core strength lies in introduction and provision of Hi-Tech solutions in Public Sector and Private Sector of Pakistan. As of today CDigital is representing world leading technology companies in ICT &amp; Enterprise Software Systems, HydroMet, Biotech, Security &amp; Surveillance and Renewable Energy sector.</p>

<h1 class="main-color">Our Core Values</h1>

<ul class="list alt list-ok">
	<li>We believe in treating our customers with respect and faith&nbsp;</li>
	<li>We grow through creativity, invention and innovation.</li>
	<li>We integrate honesty, integrity and business ethics into all aspects of our business functioning</li>
</ul>',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => '2023-11-23 12:18:54',
  ),
);
        DB::table('cd_core_values')->insert($data);
    }
}
