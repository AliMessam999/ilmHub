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
    'title' => 'ICT',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:02:40',
    'updated_at' => '2025-06-03 14:28:05',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Power Your Digital Future</h2>
              <p class="mt-4">
               Let us help you power your business to success with secure, scalable, and efficient technology
solutions, specifically designed for you, leveraging the latest in AI and cloud innovations.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/upload/team_member/NiiveAtxy1zmANDFUg9dUlt7GIQHvoyCbDWQFBLu.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Babar Jahangir</h1>
                  <p class="designation">HOD</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>babar@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'HYDROMET',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:03:33',
    'updated_at' => '2025-06-03 14:29:00',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Unlock Insights about Your Environment</h2>
              <p class="mt-4">
               Empower your decisions for a sustainable future by gaining real-time, comprehensive
environmental insights from our precise Hydromet monitoring solutions.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/assets/images/team/Sibtain.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Sibtain Bashir</h1>
                  <p class="designation">HOD</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>sibtain@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Biotechnology',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:05:54',
    'updated_at' => '2025-06-03 14:29:38',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Accelerate Your Biotech Innovation</h2>
              <p class="mt-4">
                Advance your work in life sciences using our cutting-edge technologies and sustainable
biotechnology solutions, designed to support your breakthroughs in healthcare, agriculture, and
environmental fields.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/assets/images/team/4.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Quratulain Malik</h1>
                  <p class="designation">HOD</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>quratulain@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Renewable Energy',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:06:37',
    'updated_at' => '2025-06-03 14:30:26',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Your Clean Energy Partner</h2>
              <p class="mt-4">
                Transform your energy future and achieve greater efficiency and sustainability with our
innovative renewable power solutions, covering everything from generation to smart
management.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/assets/images/team/3.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Riaz Hussain</h1>
                  <p class="designation">GM BD</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>riaz@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Mining & Minerals',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:14',
    'updated_at' => '2025-06-03 14:35:23',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Optimize Your Mining Operations</h2>
              <p class="mt-4">
                Elevate your mining operations, significantly enhancing efficiency, safety, and sustainability in
resource extraction through use of advanced technology and powerful data-driven insights.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/assets/images/team/4.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Quratulain Malik</h1>
                  <p class="designation">HOD</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>quratulain@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Security Systems',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:07:55',
    'updated_at' => '2025-06-03 14:36:08',
    'menu_id' => 2,
    'description' => '<div class="col-md-8">
            <div class="left-side-devision-main">
              <h2>Secure Your World</h2>
              <p class="mt-4">
                Secure your world and ensure your safety and resilience against the latest threats with
comprehensive surveillance, access control, and cybersecurity solutions you can rely on.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-lg rounded-0 border-0">
              <div class="card-body">
                <div class="avatar">
                  <img src="/assets/images/team/3.png" alt="" />
                </div>
                <div class="division-designation-text text-center">
                  <h1 class="">Riaz Hussain	</h1>
                  <p class="designation">GM BD	</p>
                  <p class="mb-0"><strong>Phone: </strong>+921234567890</p>
                  <p class="mb-0"><strong>Email: </strong>riaz@cdigital.com.pk</p>
                </div>
              </div>
            </div>
          </div>',
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Software Solutions',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:12:04',
    'updated_at' => '2025-11-06 11:43:53',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'IT Infrastructure & Hardware',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:12:37',
    'updated_at' => '2025-11-06 11:44:32',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'title' => 'Cyber Security & Compliance',
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:45:45',
    'created_at' => '2023-11-22 11:13:11',
    'updated_at' => '2025-11-06 11:45:45',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'title' => 'Software Solution Development',
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:45:19',
    'created_at' => '2023-11-22 11:13:35',
    'updated_at' => '2025-11-06 11:45:19',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  10 => 
  array (
    'id' => 11,
    'title' => 'Cybersecurity & Compliance',
    'parent' => '1',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:13:53',
    'updated_at' => '2023-11-22 11:13:53',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  11 => 
  array (
    'id' => 12,
    'title' => 'Company Overview',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:14:58',
    'updated_at' => '2025-11-06 11:34:01',
    'menu_id' => 6,
    'description' => NULL,
  ),
  12 => 
  array (
    'id' => 13,
    'title' => 'Leadership & Team',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:15:31',
    'updated_at' => '2025-11-06 11:39:40',
    'menu_id' => 6,
    'description' => NULL,
  ),
  13 => 
  array (
    'id' => 14,
    'title' => 'Case Studies',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:16:40',
    'updated_at' => '2025-11-06 11:40:09',
    'menu_id' => 6,
    'description' => NULL,
  ),
  14 => 
  array (
    'id' => 15,
    'title' => 'Hydrological Monitoring',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:20:19',
    'updated_at' => '2023-11-22 11:20:19',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  15 => 
  array (
    'id' => 16,
    'title' => 'Weather Stations & Networks',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:20:46',
    'updated_at' => '2025-11-06 11:47:12',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  16 => 
  array (
    'id' => 17,
    'title' => 'Environmental Monitoring',
    'parent' => '2',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:21:19',
    'updated_at' => '2023-11-22 11:21:19',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  17 => 
  array (
    'id' => 18,
    'title' => 'Technical Solutions Consulting',
    'parent' => '2',
    'deleted_at' => '2025-11-06 11:47:29',
    'created_at' => '2023-11-22 11:21:47',
    'updated_at' => '2025-11-06 11:47:29',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  18 => 
  array (
    'id' => 19,
    'title' => 'Hardware & Networking',
    'parent' => '1',
    'deleted_at' => '2025-11-06 11:47:53',
    'created_at' => '2023-11-22 11:13:53',
    'updated_at' => '2025-11-06 11:47:53',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  19 => 
  array (
    'id' => 28,
    'title' => 'Biotech R&D',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:29:05',
    'updated_at' => '2025-11-06 11:55:06',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  20 => 
  array (
    'id' => 29,
    'title' => 'Healthcare Medical Tech',
    'parent' => '3',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:29:27',
    'updated_at' => '2025-11-06 11:55:47',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  21 => 
  array (
    'id' => 30,
    'title' => 'Technical Consulting Services',
    'parent' => '3',
    'deleted_at' => '2025-11-06 11:56:05',
    'created_at' => '2023-11-22 11:29:49',
    'updated_at' => '2025-11-06 11:56:05',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  22 => 
  array (
    'id' => 34,
    'title' => 'Solar Power Solutions',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:31:50',
    'updated_at' => '2025-11-06 11:56:41',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  23 => 
  array (
    'id' => 35,
    'title' => 'Hybrid & Wind Energy',
    'parent' => '4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:32:14',
    'updated_at' => '2025-11-06 11:57:08',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  24 => 
  array (
    'id' => 36,
    'title' => 'Wind & Hybrid Energy Systems',
    'parent' => '4',
    'deleted_at' => '2025-11-06 11:57:28',
    'created_at' => '2023-11-22 11:32:41',
    'updated_at' => '2025-11-06 11:57:28',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  25 => 
  array (
    'id' => 39,
    'title' => 'Automation & Control Systems',
    'parent' => '5',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:35:25',
    'updated_at' => '2025-11-06 11:58:20',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  26 => 
  array (
    'id' => 40,
    'title' => 'Mining Management Systems',
    'parent' => '5',
    'deleted_at' => '2025-11-06 11:58:44',
    'created_at' => '2023-11-22 11:36:25',
    'updated_at' => '2025-11-06 11:58:44',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  27 => 
  array (
    'id' => 49,
    'title' => 'CCTV & Surveillance',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:40:31',
    'updated_at' => '2025-11-06 11:59:23',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  28 => 
  array (
    'id' => 50,
    'title' => 'Access  Control',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 11:41:17',
    'updated_at' => '2025-11-06 12:00:42',
    'menu_id' => NULL,
    'description' => NULL,
  ),
  29 => 
  array (
    'id' => 51,
    'title' => 'Careers',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:15:54',
    'updated_at' => '2025-05-14 16:15:54',
    'menu_id' => 6,
    'description' => NULL,
  ),
  30 => 
  array (
    'id' => 52,
    'title' => 'Insights / Blogs',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:19:26',
    'updated_at' => '2025-11-06 11:38:06',
    'menu_id' => 3,
    'description' => NULL,
  ),
  31 => 
  array (
    'id' => 53,
    'title' => 'Gallery / Media',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-14 16:19:41',
    'updated_at' => '2025-11-06 11:39:13',
    'menu_id' => 3,
    'description' => NULL,
  ),
  32 => 
  array (
    'id' => 54,
    'title' => 'Healthcare',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:27:42',
    'updated_at' => '2025-11-06 11:27:42',
    'menu_id' => 14,
    'description' => NULL,
  ),
  33 => 
  array (
    'id' => 55,
    'title' => 'Education',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:28:08',
    'updated_at' => '2025-11-06 11:28:08',
    'menu_id' => 14,
    'description' => NULL,
  ),
  34 => 
  array (
    'id' => 56,
    'title' => 'Utilities / Environment',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:28:41',
    'updated_at' => '2025-11-06 11:28:41',
    'menu_id' => 14,
    'description' => NULL,
  ),
  35 => 
  array (
    'id' => 57,
    'title' => 'Defence & Law Enforcement',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:29:35',
    'updated_at' => '2025-11-06 11:29:35',
    'menu_id' => 14,
    'description' => NULL,
  ),
  36 => 
  array (
    'id' => 58,
    'title' => 'Private Enterprises',
    'parent' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:30:07',
    'updated_at' => '2025-11-06 11:30:07',
    'menu_id' => 14,
    'description' => NULL,
  ),
  37 => 
  array (
    'id' => 59,
    'title' => 'Integrated Security Solutions',
    'parent' => '6',
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 12:01:22',
    'updated_at' => '2025-11-06 12:01:22',
    'menu_id' => NULL,
    'description' => NULL,
  ),
);
        DB::table('cd_categories')->insert($data);
    }
}
