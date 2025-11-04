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
    'facebook_link' => 'https://facebook.com.cdigital',
    'address' => 'Chaklala Scheme 3 Rawalpindi',
    'location' => 'Street 13 House 275C',
    'youtube_link' => 'https://youtube.com/cdigital',
    'google_link' => '#',
    'instagram_link' => '#',
    'twitter_link' => '#',
    'open_days' => 'Monday-Saturday',
    'open_time' => '9:00-5:00',
    'contact' => '+9344545454545',
    'contact_2' => '#',
    'email_2' => 'info@cdigital.com.pk',
    'address_2' => '#',
    'fax' => '#',
    'description' => '#',
    'alt' => 'Cdigtal Logo',
    'image' => 'upload/company_profile/tqWjFdXupr4Al2W7nZYApB475OF2H2q7IRUyXg8U.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-20 23:18:48',
    'updated_at' => '2023-11-20 23:18:48',
  ),
);
        DB::table('cd_profiles')->insert($data);
    }
}
