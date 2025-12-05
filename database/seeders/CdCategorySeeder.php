<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdCategorySeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_categories' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'IT Infrastructure',
    'slug' => '/divisions/it-infrastructure',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:02:40',
    'updated_at' => '2025-11-24 06:56:47',
    'menu_id' => 2,
    'description' => '<h2>Power Your Digital Future</h2>

<p>Let us help you power your business to success with secure, scalable, and efficient technology solutions, specifically designed for you, leveraging the latest in AI and cloud innovations.</p>

<p><img alt="" src="/upload/team_member/NiiveAtxy1zmANDFUg9dUlt7GIQHvoyCbDWQFBLu.png" /></p>

<h1>Babar Jahangir</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>babar@cdigital.com.pk</p>',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Software Solutions',
    'slug' => '/divisions/software-solutions',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:03:33',
    'updated_at' => '2025-11-24 06:57:24',
    'menu_id' => 2,
    'description' => '<h2>Unlock Insights about Your Environment</h2>

<p>Empower your decisions for a sustainable future by gaining real-time, comprehensive environmental insights from our precise Hydromet monitoring solutions.</p>

<p><img alt="" src="/assets/images/team/Sibtain.png" /></p>

<h1>Sibtain Bashir</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>sibtain@cdigital.com.pk</p>',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Hydromet',
    'slug' => '/divisions/hydromet',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:05:54',
    'updated_at' => '2025-11-24 06:58:05',
    'menu_id' => 2,
    'description' => '<h2>Accelerate Your Biotech Innovation</h2>

<p>Advance your work in life sciences using our cutting-edge technologies and sustainable biotechnology solutions, designed to support your breakthroughs in healthcare, agriculture, and environmental fields.</p>

<p><img alt="" src="/assets/images/team/4.png" /></p>

<h1>Quratulain Malik</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>quratulain@cdigital.com.pk</p>',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Biotechnology',
    'slug' => '/divisions/biotechnology',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:06:37',
    'updated_at' => '2025-11-24 06:58:36',
    'menu_id' => 2,
    'description' => '<h2>Your Clean Energy Partner</h2>

<p>Transform your energy future and achieve greater efficiency and sustainability with our innovative renewable power solutions, covering everything from generation to smart management.</p>

<p><img alt="" src="/assets/images/team/3.png" /></p>

<h1>Riaz Hussain</h1>

<p>GM BD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>riaz@cdigital.com.pk</p>',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Renewable Energy',
    'slug' => '/divisions/renewable-energy',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:14',
    'updated_at' => '2025-11-24 06:59:18',
    'menu_id' => 2,
    'description' => '<h2>Optimize Your Mining Operations</h2>

<p>Elevate your mining operations, significantly enhancing efficiency, safety, and sustainability in resource extraction through use of advanced technology and powerful data-driven insights.</p>

<p><img alt="" src="/assets/images/team/4.png" /></p>

<h1>Quratulain Malik</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>quratulain@cdigital.com.pk</p>',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Security Systems',
    'slug' => '/divisions/security-systems',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:55',
    'updated_at' => '2025-12-02 06:21:28',
    'menu_id' => 2,
    'description' => '<h2>Secure Your World</h2>

<p>Secure your world and ensure your safety and resilience against the latest threats with comprehensive surveillance, access control, and cybersecurity solutions you can rely on.</p>

<p><img alt="" src="/assets/images/team/3.png" /></p>

<h1>Riaz Hussain</h1>

<p>GM BD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>riaz@cdigital.com.pk</p>',
  ),
  6 => 
  array (
    'id' => 12,
    'title' => 'Company Overview',
    'slug' => '/about_us',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:14:58',
    'updated_at' => '2025-11-10 11:31:59',
    'menu_id' => 6,
    'description' => NULL,
  ),
  7 => 
  array (
    'id' => 13,
    'title' => 'Leadership & Team',
    'slug' => '/about_us',
    'parent' => NULL,
    'deleted_at' => '2025-11-29 04:22:29',
    'created_at' => '2023-11-22 11:15:31',
    'updated_at' => '2025-11-29 04:22:29',
    'menu_id' => 6,
    'description' => NULL,
  ),
  8 => 
  array (
    'id' => 14,
    'title' => 'Case Studies',
    'slug' => '/case-studies',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:16:40',
    'updated_at' => '2025-11-11 05:10:43',
    'menu_id' => 6,
    'description' => NULL,
  ),
  9 => 
  array (
    'id' => 51,
    'title' => 'Careers',
    'slug' => '/careers',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:15:54',
    'updated_at' => '2025-11-11 05:11:02',
    'menu_id' => 6,
    'description' => NULL,
  ),
  10 => 
  array (
    'id' => 52,
    'title' => 'Insights / Blogs',
    'slug' => '/blogs',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:19:26',
    'updated_at' => '2025-11-11 05:14:46',
    'menu_id' => 3,
    'description' => NULL,
  ),
  11 => 
  array (
    'id' => 53,
    'title' => 'Gallery / Media',
    'slug' => '/gallery',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:19:41',
    'updated_at' => '2025-11-10 11:35:22',
    'menu_id' => 3,
    'description' => NULL,
  ),
  12 => 
  array (
    'id' => 54,
    'title' => 'Healthcare',
    'slug' => '/industry-detail/healthcare',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:27:42',
    'updated_at' => '2025-11-11 05:15:41',
    'menu_id' => 14,
    'description' => NULL,
  ),
  13 => 
  array (
    'id' => 55,
    'title' => 'Education',
    'slug' => '/industry-detail/education',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:28:08',
    'updated_at' => '2025-11-11 05:16:06',
    'menu_id' => 14,
    'description' => NULL,
  ),
  14 => 
  array (
    'id' => 56,
    'title' => 'Utilities / Environment',
    'slug' => '/industry-detail/utilities-environment',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:28:41',
    'updated_at' => '2025-11-11 05:16:55',
    'menu_id' => 14,
    'description' => NULL,
  ),
  15 => 
  array (
    'id' => 57,
    'title' => 'Defence & Law Enforcement',
    'slug' => '/industry-detail/defence-law-enforcement',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:29:35',
    'updated_at' => '2025-11-11 05:17:16',
    'menu_id' => 14,
    'description' => NULL,
  ),
  16 => 
  array (
    'id' => 58,
    'title' => 'Private Enterprises',
    'slug' => '/industry-detail/private-enterprises',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:30:07',
    'updated_at' => '2025-11-11 05:17:40',
    'menu_id' => 14,
    'description' => NULL,
  ),
  17 => 
  array (
    'id' => 77,
    'title' => 'Mining & Minerals',
    'slug' => '/divisions/mining-minerals',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 05:20:26',
    'updated_at' => '2025-11-24 07:31:03',
    'menu_id' => 2,
    'description' => '<p>nnn</p>',
  ),
  18 => 
  array (
    'id' => 79,
    'title' => 'Meesam',
    'slug' => '/divisions/meesam',
    'parent' => NULL,
    'deleted_at' => '2025-11-24 07:01:20',
    'created_at' => '2025-11-24 06:45:19',
    'updated_at' => '2025-11-24 07:01:20',
    'menu_id' => 2,
    'description' => '<p><strong>Ali Messam</strong></p>

<ul>
	<li>Data Analyst</li>
</ul>',
  ),
  19 => 
  array (
    'id' => 81,
    'title' => 'IT Modernization & Cloud Infrastructure',
    'slug' => '/sub-divisions/it-modernization-cloud-infrastructure',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:13:23',
    'updated_at' => '2025-11-24 07:13:23',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  20 => 
  array (
    'id' => 82,
    'title' => 'Enterprise IT Architecture & Strategy',
    'slug' => '/sub-divisions/enterprise-it-architecture-strategy',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:13:46',
    'updated_at' => '2025-11-24 07:13:46',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  21 => 
  array (
    'id' => 83,
    'title' => 'Cybersecurity & Compliance',
    'slug' => '/sub-divisions/cybersecurity-compliance',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:14:06',
    'updated_at' => '2025-11-24 07:14:06',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  22 => 
  array (
    'id' => 84,
    'title' => 'Hardware, Networking & Infrastructure',
    'slug' => '/sub-divisions/hardware-networking-infrastructure',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:14:26',
    'updated_at' => '2025-11-24 07:14:26',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  23 => 
  array (
    'id' => 85,
    'title' => 'Quality Assurance & Product Validation',
    'slug' => '/sub-divisions/quality-assurance-product-validation',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:14:50',
    'updated_at' => '2025-11-24 07:14:50',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  24 => 
  array (
    'id' => 86,
    'title' => 'Digital Transformation',
    'slug' => '/sub-divisions/digital-transformation',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:15:52',
    'updated_at' => '2025-11-24 07:15:52',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  25 => 
  array (
    'id' => 87,
    'title' => 'Enterprise Business Applications',
    'slug' => '/sub-divisions/enterprise-business-applications',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:16:24',
    'updated_at' => '2025-11-24 07:16:24',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  26 => 
  array (
    'id' => 88,
    'title' => 'AI & Intelligent Automation',
    'slug' => '/sub-divisions/ai-intelligent-automation',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:16:48',
    'updated_at' => '2025-11-24 07:16:48',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  27 => 
  array (
    'id' => 89,
    'title' => 'Application Development & Integration',
    'slug' => '/sub-divisions/application-development-integration',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:17:11',
    'updated_at' => '2025-11-24 07:17:11',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  28 => 
  array (
    'id' => 90,
    'title' => 'Hydrology & Flood Management',
    'slug' => '/sub-divisions/hydrology-flood-management',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:19:05',
    'updated_at' => '2025-11-24 07:19:05',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  29 => 
  array (
    'id' => 91,
    'title' => 'Meteorology & Climate Monitoring',
    'slug' => '/sub-divisions/meteorology-climate-monitoring',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:19:31',
    'updated_at' => '2025-11-24 07:19:31',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  30 => 
  array (
    'id' => 92,
    'title' => 'Agrometeorology & Precision Agriculture',
    'slug' => '/sub-divisions/agrometeorology-precision-agriculture',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:20:03',
    'updated_at' => '2025-11-24 07:20:03',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  31 => 
  array (
    'id' => 93,
    'title' => 'Water Quality & Environmental Monitoring',
    'slug' => '/sub-divisions/water-quality-environmental-monitoring',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:20:38',
    'updated_at' => '2025-11-24 07:20:38',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  32 => 
  array (
    'id' => 94,
    'title' => 'Strain Engineering & Synthetic Biology',
    'slug' => '/sub-divisions/strain-engineering-synthetic-biology',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:21:35',
    'updated_at' => '2025-11-24 07:21:35',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  33 => 
  array (
    'id' => 95,
    'title' => 'Fermentation & Bioprocess Development',
    'slug' => '/sub-divisions/fermentation-bioprocess-development',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:21:57',
    'updated_at' => '2025-11-24 07:21:57',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  34 => 
  array (
    'id' => 96,
    'title' => 'Downstream Processing (DSP)',
    'slug' => '/sub-divisions/downstream-processing-dsp',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:22:21',
    'updated_at' => '2025-11-24 07:22:21',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  35 => 
  array (
    'id' => 97,
    'title' => 'Tech Transfer & Industrial Scale-Up',
    'slug' => '/sub-divisions/tech-transfer-industrial-scale-up',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:22:40',
    'updated_at' => '2025-11-24 07:22:40',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  36 => 
  array (
    'id' => 98,
    'title' => 'Biotech Technical Services',
    'slug' => '/sub-divisions/biotech-technical-services',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:22:58',
    'updated_at' => '2025-11-24 07:22:58',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  37 => 
  array (
    'id' => 99,
    'title' => 'Product Development & Partnerships',
    'slug' => '/sub-divisions/product-development-partnerships',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:23:17',
    'updated_at' => '2025-11-24 07:23:17',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  38 => 
  array (
    'id' => 100,
    'title' => 'Solar Engineering & EPC',
    'slug' => '/sub-divisions/solar-engineering-epc',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:24:07',
    'updated_at' => '2025-11-24 07:24:07',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  39 => 
  array (
    'id' => 101,
    'title' => 'Operations, Maintenance & Monitoring',
    'slug' => '/sub-divisions/operations-maintenance-monitoring',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:24:37',
    'updated_at' => '2025-11-24 07:24:37',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  40 => 
  array (
    'id' => 102,
    'title' => 'Renewable Energy Advisory',
    'slug' => '/sub-divisions/renewable-energy-advisory',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:25:04',
    'updated_at' => '2025-11-24 07:25:04',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  41 => 
  array (
    'id' => 103,
    'title' => 'Product Solutions',
    'slug' => '/sub-divisions/product-solutions',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:25:27',
    'updated_at' => '2025-11-24 07:25:27',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  42 => 
  array (
    'id' => 104,
    'title' => 'Integrated Surveillance & Analytics',
    'slug' => '/sub-divisions/integrated-surveillance-analytics',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:32:43',
    'updated_at' => '2025-11-24 07:32:43',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  43 => 
  array (
    'id' => 105,
    'title' => 'Access Control & Identity',
    'slug' => '/sub-divisions/access-control-identity',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:33:02',
    'updated_at' => '2025-11-24 07:33:02',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  44 => 
  array (
    'id' => 106,
    'title' => 'Intrusion & Perimeter Defense',
    'slug' => '/sub-divisions/intrusion-perimeter-defense',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:33:21',
    'updated_at' => '2025-11-24 07:33:21',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  45 => 
  array (
    'id' => 107,
    'title' => 'Fire Detection & Safety',
    'slug' => '/sub-divisions/fire-detection-safety',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:33:38',
    'updated_at' => '2025-11-24 07:33:38',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  46 => 
  array (
    'id' => 108,
    'title' => 'Public Address & Conference Systems',
    'slug' => '/sub-divisions/public-address-conference-systems',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:33:57',
    'updated_at' => '2025-11-24 07:33:57',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  47 => 
  array (
    'id' => 109,
    'title' => 'Scanning, Detection & Screening',
    'slug' => '/sub-divisions/scanning-detection-screening',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:34:20',
    'updated_at' => '2025-11-24 07:34:20',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  48 => 
  array (
    'id' => 110,
    'title' => 'Vehicle Tracking & Telematics',
    'slug' => '/sub-divisions/vehicle-tracking-telematics',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:35:01',
    'updated_at' => '2025-11-24 07:35:01',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  49 => 
  array (
    'id' => 111,
    'title' => 'Command, Control & Security Management',
    'slug' => '/sub-divisions/command-control-security-management',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:35:34',
    'updated_at' => '2025-11-24 07:35:34',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  50 => 
  array (
    'id' => 112,
    'title' => 'Geological Surveying & Sensing',
    'slug' => '/sub-divisions/geological-surveying-sensing',
    'parent' => '77',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:36:08',
    'updated_at' => '2025-11-24 07:36:08',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  51 => 
  array (
    'id' => 113,
    'title' => 'Mine Automation & Control',
    'slug' => '/sub-divisions/mine-automation-control',
    'parent' => '77',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:36:30',
    'updated_at' => '2025-11-24 07:36:30',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  52 => 
  array (
    'id' => 114,
    'title' => 'Mineral Processing Data Systems',
    'slug' => '/sub-divisions/mineral-processing-data-systems',
    'parent' => '77',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 07:36:50',
    'updated_at' => '2025-11-24 07:36:50',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  53 => 
  array (
    'id' => 115,
    'title' => 'Safety, Environment & Compliance Monitoring',
    'slug' => '/sub-divisions/safety-environment-compliance-monitoring',
    'parent' => '77',
    'deleted_at' => NULL,
    'created_at' => '2025-11-24 11:44:52',
    'updated_at' => '2025-11-24 11:44:52',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  54 => 
  array (
    'id' => 116,
    'title' => 'Leadership & Team',
    'slug' => 'leadership-team',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-04 10:20:34',
    'updated_at' => '2025-12-04 10:20:34',
    'menu_id' => 6,
    'description' => NULL,
  ),
);
        DB::table('cd_categories')->insert($data);
    }
}
