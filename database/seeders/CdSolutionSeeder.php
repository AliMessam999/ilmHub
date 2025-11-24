<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdSolutionSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_solutions' table
        $data = array (
  0 => 
  array (
    'id' => 94,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/gxCS0ONxpJsleqtH8FSFBARBoqEjfRj1eLzLqFHr.png',
    'description' => '<p>To empower industries with smart, secure, and future-ready technologies.</p>',
    'category_id' => 15,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:13:43',
    'updated_at' => '2025-11-22 11:05:00',
    'title' => 'Real-Time Awareness for a Resilient Water Future',
    'slug' => '/sub-divisions/hydrological-monitoring',
  ),
  1 => 
  array (
    'id' => 95,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/sFlgKWTU8xOIe977Squddt8CtCT9RyWU86eXn6t4.png',
    'description' => '<p>To empower industries with smart, secure, and future-ready technologies.</p>

<ul>
	<li>Empowerment</li>
	<li>Tecnology</li>
	<li>Growth</li>
</ul>',
    'category_id' => 8,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:27:10',
    'updated_at' => '2025-11-21 11:22:38',
    'title' => 'IT Infrastructure & Hardware',
    'slug' => '/sub-divisions/it-infrastructure-and-hardware',
  ),
  2 => 
  array (
    'id' => 97,
    'type' => 'Project',
    'alt' => 'tji-service-1',
    'image' => 'upload/project/ScwQKvMVilum0jwiw9JE4t5phcGbx1WMXKcIwqER.jpg',
    'description' => '<ul>
	<li>Empow</li>
	<li>Tecnology</li>
	<li>Growth</li>
</ul>',
    'category_id' => 7,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:32:25',
    'updated_at' => '2025-11-22 06:54:39',
    'title' => 'Enterprise Software Integration Suite',
    'slug' => '/sub-divisions/software-solutions',
  ),
  3 => 
  array (
    'id' => 98,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/KcDlR2Cl0LcU4d6sDJshXRudlWxdC6LiaSxK4kCq.jpg',
    'description' => 'A complete migration and cloud adoption service that optimizes hosting, storage, and compute resources. It enhances scalability, reduces cost, and boosts performance for businesses shifting to cloud environments.',
    'category_id' => 11,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:34:12',
    'updated_at' => '2025-11-18 05:19:21',
    'title' => 'Cloud Transformation & Infrastructure Optimization',
    'slug' => '/sub-divisions/cybersecurity-compliance',
  ),
  4 => 
  array (
    'id' => 99,
    'type' => 'Project',
    'alt' => 'tji-service-3',
    'image' => 'upload/project/bEQuUBDOULptPFZHU6KAYqtha0ksJDmoW1cOJYNW.jpg',
    'description' => '<p>To empower industries with smart, secure, and future-ready technologies.</p>

<ul>
	<li>Empowerment</li>
	<li>Tecnology</li>
	<li>Growth</li>
</ul>',
    'category_id' => 17,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:36:30',
    'updated_at' => '2025-11-21 11:23:26',
    'title' => 'Digital Workplace Automation Platform',
    'slug' => '/sub-divisions/environmental-monitoring',
  ),
  5 => 
  array (
    'id' => 100,
    'type' => 'Project',
    'alt' => 'tji-service-4',
    'image' => 'upload/project/IhJ9OEXEtAwuvPWMmxrEfChatGtDNUVSOJs9Qy5p.jpg',
    'description' => 'An advanced analytics system that allows organizations to convert raw data into insights through dashboards, forecasting models, and automated reporting&mdash;supporting smarter decision-making.',
    'category_id' => 28,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:37:54',
    'updated_at' => '2025-11-18 05:20:36',
    'title' => 'Business Intelligence & Analytics Framework',
    'slug' => '/sub-divisions/biotech-rd',
  ),
  6 => 
  array (
    'id' => 101,
    'type' => 'Project',
    'alt' => 'tji-service-1',
    'image' => 'upload/project/obNLRhSh3U4p1GQPlaYTwNaoJYIfZgzjfaILm2ag.jpg',
    'description' => 'A sensor-driven solution for measuring river flows, water levels, and discharge in real time. Ideal for flood forecasting, irrigation planning, and water resource management.',
    'category_id' => 29,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:39:14',
    'updated_at' => '2025-11-18 05:21:22',
    'title' => 'Real-Time Hydrological Monitoring System (RHMS)',
    'slug' => '/sub-divisions/healthcare-medical-tech',
  ),
  7 => 
  array (
    'id' => 102,
    'type' => 'Project',
    'alt' => 'tji-service-3',
    'image' => 'upload/project/o7dngdQAoWiQJm0Oc782DgLt2hmTN1SN8CJc4jqk.jpg',
    'description' => 'A robust network of weather stations providing continuous data on rainfall, temperature, humidity, and wind patterns. The system integrates with centralized dashboards for decision-makers.',
    'category_id' => 34,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:40:23',
    'updated_at' => '2025-11-18 05:22:08',
    'title' => 'Automated Weather Station Network',
    'slug' => '/sub-divisions/solar-power-solutions',
  ),
  8 => 
  array (
    'id' => 103,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/V6OHzvyCHoPWVgUzRCwGzlYUcmSzDmXdyVh8eTBQ.jpg',
    'description' => 'A monitoring solution analyzing air, water, and soil conditions using high-precision sensors. It supports environmental compliance, impact studies, and climate research.',
    'category_id' => 35,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:25:29',
    'updated_at' => '2025-11-18 05:25:29',
    'title' => 'Environmental Quality Assessment Platform',
    'slug' => '/sub-divisions/hybrid-wind-energy',
  ),
  9 => 
  array (
    'id' => 104,
    'type' => 'Project',
    'alt' => 'tji-service-1',
    'image' => 'upload/project/3IJbQIXeFheyp0lS9xXBtp7MXnFtgJ2C4iSsARKQ.jpg',
    'description' => 'A GIS-enabled visualization platform that creates interactive maps, charts, and reports from hydrological datasets&mdash;making large datasets easier to understand and act upon.',
    'category_id' => 39,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:26:37',
    'updated_at' => '2025-11-18 05:26:37',
    'title' => 'Hydrometric Data Visualization & Reporting Tool',
    'slug' => '/sub-divisions/automation-control-systems',
  ),
  10 => 
  array (
    'id' => 105,
    'type' => 'Project',
    'alt' => 'tji-service-4',
    'image' => 'upload/project/llf6qvZhR7xXKCucsQONCPFsDxRqtXSlvPW2KqhQ.jpg',
    'description' => 'An AI-powered camera and sensor network capable of identifying unusual activity, recognizing faces/vehicles, and sending instant alerts to security personnel.',
    'category_id' => 49,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:28:06',
    'updated_at' => '2025-11-18 05:28:06',
    'title' => 'Smart Surveillance & Threat Detection Network',
    'slug' => '/sub-divisions/cctv-surveillance',
  ),
  11 => 
  array (
    'id' => 106,
    'type' => 'Project',
    'alt' => 'tji-service-3',
    'image' => 'upload/project/PTE83nZqg2DJChqyIJeDh9znO0PxwhlLDkjl8hAa.jpg',
    'description' => 'A biometric-based system offering card, face, and fingerprint access control with centralized authentication logs for enhanced site security.',
    'category_id' => 50,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:29:34',
    'updated_at' => '2025-11-18 05:29:34',
    'title' => 'Access Control & Identity Verification Suite',
    'slug' => '/sub-divisions/access-control',
  ),
  12 => 
  array (
    'id' => 107,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/OlAojeUTHw2Zf8TwItbSUXboyJNbdwDFy2hkxlqT.jpg',
    'description' => 'A comprehensive framework connecting digital cybersecurity tools with physical security systems&mdash;bringing firewalls, CCTV, alarms, and access controls into one unified dashboard.',
    'category_id' => 59,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:30:51',
    'updated_at' => '2025-11-18 05:30:51',
    'title' => 'Cyber-Physical Security Integration Platform',
    'slug' => '/sub-divisions/integrated-security-solutions',
  ),
  13 => 
  array (
    'id' => 108,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/gMfsVnPDFj488ndskHCI9PDxRvAwWrb6j11JKI5e.jpg',
    'description' => '<p>An advanced analytics system that allows organizations to convert raw data into insights through dashboards, forecasting models, and automated reporting&mdash;supporting smarter decision-making.</p>',
    'category_id' => 16,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:32:50',
    'updated_at' => '2025-11-22 10:37:06',
    'title' => 'Business Intelligence & Analytics Framework',
    'slug' => '/sub-divisions/weather-stations-networks',
  ),
  14 => 
  array (
    'id' => 113,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/rJbp5OeLp0mmOuhIcsfHASFw1W42JXCQEecYKKGv.jpg',
    'description' => '<p>mmm</p>',
    'category_id' => 71,
    'deleted_at' => NULL,
    'created_at' => '2025-11-22 09:20:21',
    'updated_at' => '2025-11-22 09:20:21',
    'title' => 'Data Solution',
    'slug' => '/sub-divisions/data-solution',
  ),
  15 => 
  array (
    'id' => 114,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/V1iIHw9Z6LJrgoHygpVXNfslmQj3lTHOixdUnWdf.jpg',
    'description' => '<p>In today&#39;s fast-paced digital landscape, outdated infrastructure can hold your business back. Our IT Modernization &amp; Cloud Infrastructure services help you break free from legacy limitations and embrace agile, scalable systems that drive efficiency and innovation. Whether you&#39;re consolidating data centers, migrating to the cloud, or strengthening business continuity, we provide end-to-end solutions that modernize your technology foundation while minimizing disruption. Our approach balances performance, security, and cost-effectiveness ensuring your infrastructure not only meets today&#39;s demands but is ready to evolve with tomorrow&#39;s opportunities.</p>',
    'category_id' => 72,
    'deleted_at' => NULL,
    'created_at' => '2025-11-22 09:31:01',
    'updated_at' => '2025-11-22 09:31:01',
    'title' => 'Modern systems built for agility, designed for growth',
    'slug' => '/sub-divisions/modern-systems-built-for-agility-designed-for-growth',
  ),
  16 => 
  array (
    'id' => 115,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/wiiMUKnMr7mY3fZLzq9CDmx68tihH5xvhGBgxZL7.jpg',
    'description' => '<p>An advanced analytics system that allows organizations to convert raw data into insights through dashboards, forecasting models, and automated reporting&mdash;supporting smarter decision-making.</p>',
    'category_id' => 78,
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 05:23:43',
    'updated_at' => '2025-11-24 05:47:07',
    'title' => 'Solution 1 for software solutions',
    'slug' => '/sub-divisions/solution-1-for-software-solutions',
  ),
);
        DB::table('cd_solutions')->insert($data);
    }
}
