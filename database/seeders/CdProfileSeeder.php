<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdProfileSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_profiles' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'email' => 'info@cdigital.com.pk',
    'facebook_link' => 'https://facebook.com/CDigitalPakOfficial',
    'address' => 'Platino Mall, 2nd Floor, D-Markaz Gulberg Green Islamabad',
    'location' => 'Platino Mall, 2nd Floor, D-Markaz Gulberg Green Islamabad',
    'youtube_link' => 'https://www.linkedin.com/company/cdigital/',
    'google_link' => '#',
    'instagram_link' => '#',
    'twitter_link' => 'https://x.com/cdigitalislamab',
    'open_days' => 'Monday-Saturday',
    'open_time' => '9:00-5:00',
    'contact' => '+92-51-5915790',
    'contact_2' => '+92-51-5915591',
    'contact_3' => '+92-51-5915992',
    'email_2' => 'info@cdigital.com.pk',
    'address_2' => '#',
    'fax' => '#',
    'description' => '#',
    'alt' => 'Cdigtal Islamabad',
    'image' => 'upload/company_profile/fxNP04U0kr5vxExXIaWDHHxQahdWHiILoxeBLzqv.png',
    'large_logo' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-21 04:18:48',
    'updated_at' => '2025-12-04 04:45:20',
  ),
);
        DB::table('cd_profiles')->insert($data);
    }
}
