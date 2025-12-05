<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFeatureSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_features' table
        $data = array (
  0 => 
  array (
    'id' => 28,
    'title' => 'Billing Infrastructure',
    'description' => '<h2>Building First Unified Province-Wide Digital Utility System</h2>

<h3>How CDigital Modernized AJKED&rsquo;s Consumer Billing Infrastructure &amp; Administrative Systems at Scale</h3>

<p>AJKED&rsquo;s utility operations were heavily paper-driven, resulting in delays, errors, and limited transparency. With no centralized data visibility, departments worked in isolation, making reconciliation and reporting slow and unreliable. Outdated hardware, missing backups, and the absence of disaster recovery created serious security and reliability risks. Customer services also suffered, with long queues, repeated visits, and high complaint volumes. AJKED needed a modern digital backbone to support its ERP ecosystem and transition to fully integrated utility governance.</p>

<h3><strong>Services&nbsp;Delivered </strong></h3>

<ul>
	<li>IT Infrastructure</li>
	<li>Hardware Supply</li>
	<li>Systems Integration</li>
	<li>ERP Enablement</li>
	<li>Training &amp; Support</li>
</ul>

<h3><strong>Key Features</strong></h3>

<ul>
	<li>10 Districts Digitally Enabled</li>
	<li>100+ Offices Integrated Into One System</li>
	<li>500+ Government Employees Covered</li>
</ul>',
    'sub_category_id' => 82,
    'client_name' => 'AJK Electricity Department (AJKED)',
    'funded_by' => NULL,
    'location' => NULL,
    'industry_id' => NULL,
    'website' => NULL,
    'user_details' => 'The AJK Electricity Department (AJKED) oversees thousands of employees, dozens of offices, and a rapidly expanding consumer base across Azad Jammu & Kashmir. For years, manual workflows and fragmented, paper-based systems created operational bottlenecks, revenue gaps, and governance challenges. To enable a transparent, scalable, and digitally empowered utility, AJKED partnered with CDigital to modernize its core IT infrastructure — laying the foundation for a fully digital power-sector ecosystem.',
    'alt' => NULL,
    'icon' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-03 18:12:01',
    'updated_at' => '2025-12-04 08:42:36',
    'image' => NULL,
  ),
  1 => 
  array (
    'id' => 30,
    'title' => 'Driving License Management',
    'description' => '<h2>Transforming Driving License Management in AJ&amp;K</h2>

<h3>How CDigital Digitalized an Entire Provincial Licensing System &mdash; Enhancing Security, Speed &amp; Public Trust</h3>

<p>AJ&amp;K&rsquo;s driving license system was fully manual, leading to delays, frequent errors, and low operational efficiency. With no digital workflows, weak infrastructure, and high security vulnerabilities, the process lacked reliability, transparency, and data protection. Modernizing this system was essential to enable secure, efficient, and citizen-friendly licensing services.</p>

<h3><strong>Services&nbsp;Delivered</strong></h3>

<ul>
	<li>DLMS Software Development</li>
	<li>IT &amp; Security Infrastructure Setup</li>
	<li>Workflow Automation</li>
	<li>CCTV + Biometrics</li>
	<li>Backup &amp; Disaster Recovery</li>
	<li>Queue Management System</li>
	<li>Renovation &amp; Service Center Setup</li>
	<li>Staff Training &amp; Support</li>
</ul>

<h3><strong>Key Features</strong></h3>

<ul>
	<li>10 District Police Units Connected to Central Licensing System</li>
	<li>24/7 Digital Verification Portal Operational across AJ&amp;K</li>
	<li>1.5M+ Residents Served</li>
</ul>

<p>&nbsp;</p>',
    'sub_category_id' => NULL,
    'client_name' => 'AJ&K Information Technology Board & AJ&K Police',
    'funded_by' => NULL,
    'location' => NULL,
    'industry_id' => NULL,
    'website' => NULL,
    'user_details' => 'The AJ&K Information Technology Board, the region’s lead agency for digital transformation, is driving modernization under the Master Implementation Plan. To strengthen governance and improve public services, the AJ&K Police partnered with CDigital to replace manual, paper-based licensing with a centralized, secure digital driving license system — one of the region’s earliest milestones in e-governance.',
    'alt' => NULL,
    'icon' => 'Alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-04 18:20:09',
    'updated_at' => '2025-12-04 18:20:09',
    'image' => NULL,
  ),
);
        DB::table('cd_features')->insert($data);
    }
}
