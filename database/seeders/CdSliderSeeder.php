<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdSliderSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_sliders' table
        $data = array (
  // 0 => 
  // array (
  //   'id' => 1,
  //   'title' => 'Biotech Solutions',
  //   'description' => '<p>Utilizes biological systems, living organisms or parts of this to develop or create different products. We engage with<br />
  //   our clients in conducting technical, business development and commercial studies for biotech projects and on parallel<br />
  //   design, develop, implement innovative biotech solutions. Combining biotechnology and synthetic organic chemistry<br />
  //   expertise, we offer a comprehensive service, covering all key development steps of fermentation process for efficient<br />
  //   production of biosynthetic natural products. Working with some of the largest international companies, we provide to<br />
  //   our clients full R&amp;D support both in our laboratories as well as on-site at the client&rsquo;s facilities.</p>',
  //   'image' => 'upload/slider/Cu6jcYmK1aqQqwvXoghWYH1Fy2Fkm1QDiPyyV3ti.jpg',
  //   'alt' => 'Utilizes biological systems',
  //   'deleted_at' => NULL,
  //   'created_at' => '2023-11-23 07:04:38',
  //   'updated_at' => '2023-11-23 07:04:38',
  // ),
  // 1 => 
  // array (
  //   'id' => 2,
  //   'title' => 'HydroMet',
  //   'description' => '<p>Our solution offerings include state of the art hydrological and meteorological<br />
  //   monitoring systems that provide monitoring of environment, climate and<br />
  //   natural resources.&nbsp;</p>',
  //   'image' => 'upload/slider/wjQ56iNWHPJK8lsvqHn2OhKlcjy0KcacvNczf6U3.jpg',
  //   'alt' => 'monitoring of environment',
  //   'deleted_at' => NULL,
  //   'created_at' => '2023-11-23 07:06:06',
  //   'updated_at' => '2023-11-23 07:06:06',
  // ),
  // 2 => 
  // array (
  //   'id' => 3,
  //   'title' => 'ICT Infrastructure & Systems',
  //   'description' => '<p>We are your channel partner for all areas of ICT Systems &amp; Infrastructure such as data networks, computer servers, data storages,<br />
  //   information security &amp; virtualization platforms etc.</p>',
  //   'image' => 'upload/slider/THCrlmBsmbmcqYHY9v5FEfTjOIyOk69bLcrNMZ5g.jpg',
  //   'alt' => 'partner for all areas of ICT',
  //   'deleted_at' => NULL,
  //   'created_at' => '2023-11-23 07:07:33',
  //   'updated_at' => '2023-11-23 07:07:33',
  // ),
  // 3 => 
  // array (
  //   'id' => 4,
  //   'title' => 'Security & Safety',
  //   'description' => '<p>We provide complete integrated and converged security, safety &amp; surveillance systems that covers both smart<br />
  //     building and smart cities requirement of emerging market.</p>',
  //   'image' => 'upload/slider/wlbSUTLCqDIVMH9UquhufdraKT3fTR7LbG3SkqYa.jpg',
  //   'alt' => 'converged security, safety',
  //   'deleted_at' => NULL,
  //   'created_at' => '2023-11-23 07:08:23',
  //   'updated_at' => '2023-11-23 07:08:23',
  // ),
  // 4 => 
  // array (
  //   'id' => 5,
  //   'title' => 'Enterprise Software',
  //   'description' => '<p>Enterprise software, also known as enterprise application software<br />
  //   (EAS),is computer software used to satisfy the needs of an organization<br />
  //   rather than individual users. We offerdiversified and modern application<br />
  //   platforms to facilitate its customer</p>',
  //   'image' => 'upload/slider/5cDXCf3UDTBh5hDAN9sGiriyuxsuk4xX6XJD9w7j.jpg',
  //   'alt' => 'enterprise software',
  //   'deleted_at' => NULL,
  //   'created_at' => '2023-11-23 07:10:30',
  //   'updated_at' => '2023-11-23 07:10:30',
  // ),
    0 => 
  array (
    'id' => 1,
    'title' => 'ICT',
    'description' => '<p> Our ICT solutions ensure secure, scalable, and efficient
                    technology for your business</p>',
    'image' => 'assets/images/ict.png',
    'alt' => 'Utilizes biological systems',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:04:38',
    'updated_at' => '2023-11-23 07:04:38',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Hydromet',
    'description' => '<p>From real-time data collection to predictive analytics, we
                    help industries make informed decisions for a sustainable
                    future</p>',
    'image' => 'assets/images/hydromet.png',
    'alt' => 'monitoring of environment',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:06:06',
    'updated_at' => '2023-11-23 07:06:06',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Biotech',
    'description' => '<p>From cutting-edge lab technologies to sustainable solutions,
                    we empower progress through science and technology.</p>',
    'image' => 'assets/images/biotech.png',
    'alt' => 'partner for all areas of ICT',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:07:33',
    'updated_at' => '2023-11-23 07:07:33',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Security',
    'description' => '<p>From surveillance and access control to cybersecurity, we
                    ensure safety and resilience in an evolving threat landscape.</p>',
    'image' => 'assets/images/security.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:08:23',
    'updated_at' => '2023-11-23 07:08:23',
  ),
    4 => 
  array (
    'id' => 5,
    'title' => 'Energy',
    'description' => '<p>Our Energy solutions drive efficiency and innovation in
                    power generation, distribution, and management.</p>',
    'image' => 'assets/images/energy.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:08:23',
    'updated_at' => '2023-11-23 07:08:23',
  ),
    5 => 
  array (
    'id' => 6,
    'title' => 'Mnies & Minerals',
    'description' => '<p>Enhancing efficiency, safety, and sustainability in resource
                    extraction with advanced technology and data-driven insights.</p>',
    'image' => 'assets/images/mines.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:08:23',
    'updated_at' => '2023-11-23 07:08:23',
  ),
 
);
        DB::table('cd_sliders')->insert($data);
    }
}
