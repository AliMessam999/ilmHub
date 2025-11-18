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
    'id' => 0,
    'title' => '',
    'slug' => '   ',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
    'menu_id' => NULL,
    'description' => NULL,
  ),
  1 => 
  array (
    'id' => 1,
    'title' => 'ICT',
    'slug' => '/divisions/ict',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:02:40',
    'updated_at' => '2025-11-10 11:12:58',
    'menu_id' => 2,
    'description' => '<h2>Power Your Digital Future</h2>

<p>Let us help you power your business to success with secure, scalable, and efficient technology solutions, specifically designed for you, leveraging the latest in AI and cloud innovations.</p>

<p><img alt="" src="/upload/team_member/NiiveAtxy1zmANDFUg9dUlt7GIQHvoyCbDWQFBLu.png" /></p>

<h1>Babar Jahangir</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>babar@cdigital.com.pk</p>',
  ),
  2 => 
  array (
    'id' => 2,
    'title' => 'Hydromet',
    'slug' => '/divisions/hydromet',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:03:33',
    'updated_at' => '2025-11-10 11:18:58',
    'menu_id' => 2,
    'description' => '<h2>Unlock Insights about Your Environment</h2>

<p>Empower your decisions for a sustainable future by gaining real-time, comprehensive environmental insights from our precise Hydromet monitoring solutions.</p>

<p><img alt="" src="/assets/images/team/Sibtain.png" /></p>

<h1>Sibtain Bashir</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>sibtain@cdigital.com.pk</p>',
  ),
  3 => 
  array (
    'id' => 3,
    'title' => 'Biotechnology',
    'slug' => '/divisions/biotechnology',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:05:54',
    'updated_at' => '2025-11-10 11:20:08',
    'menu_id' => 2,
    'description' => '<h2>Accelerate Your Biotech Innovation</h2>

<p>Advance your work in life sciences using our cutting-edge technologies and sustainable biotechnology solutions, designed to support your breakthroughs in healthcare, agriculture, and environmental fields.</p>

<p><img alt="" src="/assets/images/team/4.png" /></p>

<h1>Quratulain Malik</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>quratulain@cdigital.com.pk</p>',
  ),
  4 => 
  array (
    'id' => 4,
    'title' => 'Renewable Energy',
    'slug' => '/divisions/renewable-energy',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:06:37',
    'updated_at' => '2025-11-10 11:23:40',
    'menu_id' => 2,
    'description' => '<h2>Your Clean Energy Partner</h2>

<p>Transform your energy future and achieve greater efficiency and sustainability with our innovative renewable power solutions, covering everything from generation to smart management.</p>

<p><img alt="" src="/assets/images/team/3.png" /></p>

<h1>Riaz Hussain</h1>

<p>GM BD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>riaz@cdigital.com.pk</p>',
  ),
  5 => 
  array (
    'id' => 5,
    'title' => 'Mining & Minerals',
    'slug' => '/divisions/mining-minerals',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:14',
    'updated_at' => '2025-11-11 05:09:34',
    'menu_id' => 2,
    'description' => '<h2>Optimize Your Mining Operations</h2>

<p>Elevate your mining operations, significantly enhancing efficiency, safety, and sustainability in resource extraction through use of advanced technology and powerful data-driven insights.</p>

<p><img alt="" src="/assets/images/team/4.png" /></p>

<h1>Quratulain Malik</h1>

<p>HOD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>quratulain@cdigital.com.pk</p>',
  ),
  6 => 
  array (
    'id' => 6,
    'title' => 'Security Systems',
    'slug' => '/divisions/security-systems',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:55',
    'updated_at' => '2025-11-11 05:10:01',
    'menu_id' => 2,
    'description' => '<h2>Secure Your World</h2>

<p>Secure your world and ensure your safety and resilience against the latest threats with comprehensive surveillance, access control, and cybersecurity solutions you can rely on.</p>

<p><img alt="" src="/assets/images/team/3.png" /></p>

<h1>Riaz Hussain</h1>

<p>GM BD</p>

<p><strong>Phone: </strong>+921234567890</p>

<p><strong>Email: </strong>riaz@cdigital.com.pk</p>',
  ),
  7 => 
  array (
    'id' => 7,
    'title' => 'Software Solutions',
    'slug' => '/sub-divisions/software-solutions',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:12:04',
    'updated_at' => '2025-11-11 05:19:33',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  8 => 
  array (
    'id' => 8,
    'title' => 'IT Infrastructure & Hardware',
    'slug' => '/sub-divisions/it-infrastructure-and-hardware',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:12:37',
    'updated_at' => '2025-11-11 05:20:21',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  9 => 
  array (
    'id' => 9,
    'title' => 'Cyber Security & Compliance',
    'slug' => NULL,
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:45:45',
    'created_at' => '2023-11-22 11:13:11',
    'updated_at' => '2025-11-06 11:45:45',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  10 => 
  array (
    'id' => 10,
    'title' => 'Software Solution Development',
    'slug' => NULL,
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:45:19',
    'created_at' => '2023-11-22 11:13:35',
    'updated_at' => '2025-11-06 11:45:19',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  11 => 
  array (
    'id' => 11,
    'title' => 'Cybersecurity & Compliance',
    'slug' => '/sub-divisions/cybersecurity-compliance',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:13:53',
    'updated_at' => '2025-11-11 05:21:34',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  12 => 
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
  13 => 
  array (
    'id' => 13,
    'title' => 'Leadership & Team',
    'slug' => '/about_us',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:15:31',
    'updated_at' => '2025-11-10 11:32:27',
    'menu_id' => 6,
    'description' => NULL,
  ),
  14 => 
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
  15 => 
  array (
    'id' => 15,
    'title' => 'Hydrological Monitoring',
    'slug' => '/sub-divisions/hydrological-monitoring',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:20:19',
    'updated_at' => '2025-11-11 05:22:00',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  16 => 
  array (
    'id' => 16,
    'title' => 'Weather Stations & Networks',
    'slug' => '/sub-divisions/weather-stations-networks',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:20:46',
    'updated_at' => '2025-11-11 05:22:20',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  17 => 
  array (
    'id' => 17,
    'title' => 'Environmental Monitoring',
    'slug' => '/sub-divisions/environmental-monitoring',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:21:19',
    'updated_at' => '2025-11-11 05:22:40',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  18 => 
  array (
    'id' => 18,
    'title' => 'Technical Solutions Consulting',
    'slug' => NULL,
    'parent' => '2',
    'deleted_at' => '2025-11-06 11:47:29',
    'created_at' => '2023-11-22 11:21:47',
    'updated_at' => '2025-11-06 11:47:29',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  19 => 
  array (
    'id' => 19,
    'title' => 'Hardware & Networking',
    'slug' => NULL,
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:47:53',
    'created_at' => '2023-11-22 11:13:53',
    'updated_at' => '2025-11-06 11:47:53',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  20 => 
  array (
    'id' => 28,
    'title' => 'Biotech R&D',
    'slug' => '/sub-divisions/biotech-rd',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:29:05',
    'updated_at' => '2025-11-11 05:22:59',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  21 => 
  array (
    'id' => 29,
    'title' => 'Healthcare Medical Tech',
    'slug' => '/sub-divisions/healthcare-medical-tech',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:29:27',
    'updated_at' => '2025-11-11 05:23:20',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  22 => 
  array (
    'id' => 30,
    'title' => 'Technical Consulting Services',
    'slug' => NULL,
    'parent' => '3',
    'deleted_at' => '2025-11-06 11:56:05',
    'created_at' => '2023-11-22 11:29:49',
    'updated_at' => '2025-11-06 11:56:05',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  23 => 
  array (
    'id' => 34,
    'title' => 'Solar Power Solutions',
    'slug' => '/sub-divisions/solar-power-solutions',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:31:50',
    'updated_at' => '2025-11-11 05:23:39',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  24 => 
  array (
    'id' => 35,
    'title' => 'Hybrid & Wind Energy',
    'slug' => '/sub-divisions/hybrid-wind-energy',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:32:14',
    'updated_at' => '2025-11-11 05:23:58',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  25 => 
  array (
    'id' => 36,
    'title' => 'Wind & Hybrid Energy Systems',
    'slug' => NULL,
    'parent' => '4',
    'deleted_at' => '2025-11-06 11:57:28',
    'created_at' => '2023-11-22 11:32:41',
    'updated_at' => '2025-11-06 11:57:28',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  26 => 
  array (
    'id' => 39,
    'title' => 'Automation & Control Systems',
    'slug' => '/sub-divisions/automation-control-systems',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:35:25',
    'updated_at' => '2025-11-11 05:24:19',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  27 => 
  array (
    'id' => 40,
    'title' => 'Mining Management Systems',
    'slug' => NULL,
    'parent' => '5',
    'deleted_at' => '2025-11-06 11:58:44',
    'created_at' => '2023-11-22 11:36:25',
    'updated_at' => '2025-11-06 11:58:44',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  28 => 
  array (
    'id' => 49,
    'title' => 'CCTV & Surveillance',
    'slug' => '/sub-divisions/cctv-surveillance',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:40:31',
    'updated_at' => '2025-11-11 05:24:40',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  29 => 
  array (
    'id' => 50,
    'title' => 'Access  Control',
    'slug' => '/sub-divisions/access-control',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:41:17',
    'updated_at' => '2025-11-11 05:25:02',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  30 => 
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
  31 => 
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
  32 => 
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
  33 => 
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
  34 => 
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
  35 => 
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
  36 => 
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
  37 => 
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
  38 => 
  array (
    'id' => 59,
    'title' => 'Integrated Security Solutions',
    'slug' => '/sub-divisions/integrated-security-solutions',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 12:01:22',
    'updated_at' => '2025-11-11 05:25:22',
    'menu_id' => NULL,
    'description' => NULL,
  ),
);
        DB::table('cd_categories')->insert($data);
    }
}
