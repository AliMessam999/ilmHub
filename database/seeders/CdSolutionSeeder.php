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
    'description' => 'Our hydrological monitoring solutions provide accurate, real-time insights into water levels, flow, and quality. Designed to support effective decision-making, we help governments, researchers, and communities manage water resources responsibly &mdash; ensuring resilience against floods, droughts, and environmental change.',
    'category_id' => 15,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:13:43',
    'updated_at' => '2025-11-18 05:15:31',
    'title' => 'Real-Time Awareness for a Resilient Water Future',
    'slug' => '/sub-divisions/hydrological-monitoring',
  ),
  1 => 
  array (
    'id' => 95,
    'type' => 'Project',
    'alt' => 'tji-service-2',
    'image' => 'upload/project/sFlgKWTU8xOIe977Squddt8CtCT9RyWU86eXn6t4.png',
    'description' => 'IT Infrastructure &amp; Hardware',
    'category_id' => 8,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:27:10',
    'updated_at' => '2025-11-18 05:17:58',
    'title' => 'IT Infrastructure & Hardware',
    'slug' => '/sub-divisions/it-infrastructure-and-hardware',
  ),
  2 => 
  array (
    'id' => 97,
    'type' => 'Project',
    'alt' => 'tji-service-1',
    'image' => 'upload/project/ScwQKvMVilum0jwiw9JE4t5phcGbx1WMXKcIwqER.jpg',
    'description' => 'A unified platform enabling organizations to seamlessly connect ERP, CRM, HRMS, and custom applications. This solution improves data synchronization, automates workflows, and ensures smooth cross-department operations.',
    'category_id' => 7,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:32:25',
    'updated_at' => '2025-11-18 05:18:37',
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
    'description' => 'A streamlined workplace solution offering automated task management, document routing, internal communication tools, and centralized reporting dashboards to modernize daily operations.',
    'category_id' => 17,
    'deleted_at' => NULL,
    'created_at' => '2025-11-17 11:36:30',
    'updated_at' => '2025-11-18 05:20:05',
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
    'description' => 'An advanced analytics system that allows organizations to convert raw data into insights through dashboards, forecasting models, and automated reporting&mdash;supporting smarter decision-making.',
    'category_id' => 16,
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 05:32:50',
    'updated_at' => '2025-11-18 05:32:50',
    'title' => 'Business Intelligence & Analytics Framework',
    'slug' => '/sub-divisions/weather-stations-networks',
  ),
);
        DB::table('cd_solutions')->insert($data);
    }
}
