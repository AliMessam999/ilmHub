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
    'id' => 1,
    'title' => 'CONSULTING',
    'description' => '<p>Having more than 15 years of technological systems design &amp; implementations portfolio in the field and vast experience of handling public sector, corporate as well as private sector projects, CDigital offers technology consulting services to its valued customers to assess and design the solutions as per their needs in the field of ICT &amp; Enterprise Software Systems, HydroMet, Biotech, Security &amp; Surveillance and Renewable Energy divisions. During consultations we as an organization always respect everybody&rsquo;s opinion, background, cultural and language differences and make sure that everybody understands the consultation process. We provide consulting services for ICT &amp; Enterprise Software Systems, HydroMet, Biotech, Security &amp; Surveillance and Renewable Energy projects.</p>',
    'image' => 'upload/featured/IhxL953KMv6okJaGtBtOouZs231ZbCtNgKL04fRi.png',
    'alt' => 'laptop',
    'icon' => '<i class="fa fa-laptop"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:13:03',
    'updated_at' => '2023-11-23 07:13:03',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'PROJECT MANAGEMENT',
    'description' => '<p>CDigital has experienced pool of project management professionals that helps our project governance methodology for superior service provisioning.&nbsp;We offer specialized professional services related to the complete program management. Our improved project management processes help us in achieving the best results. We always take a fresh perspective on our current and completed projects which assists us to improve our management strategies. Our project management philosophy is to encourage consistent communications amongst stakeholders.We always try our level best to improve our productivity and quality of work and ensures maximum level of our customers&rsquo; satisfactions. We boost our base line through practicing professional project management procedures. Our quality assurance department is independently working to ensure the transparency and quality of project management services.&nbsp; The sectors for which we provide project management services include ICT &amp; Enterprise Software Systems, HydroMet, Biotech, Security &amp; Surveillance and Renewable Energy.</p>',
    'image' => 'upload/featured/vEW3SwA2hnncevn7CZiAWL7DovSDXg2pPYTdmOFE.png',
    'alt' => 'book',
    'icon' => '<i class="fa fa-book"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:14:22',
    'updated_at' => '2023-11-23 07:14:22',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'MAINTENANCE',
    'description' => '<p>CDigital understands that the importance of maintenance and support services is critical for the system success after system&rsquo;s implementation.&nbsp; CDigital designs standard operational procedures for the post implementation support by signing Service Level Agreements (SLAs) for the valued customers and projects.&nbsp;Our experienced help desk team assures the timely execution of maintenance &amp; support services activities.&nbsp;By providing maintenance services we increase client confidence, life expectancy of system &amp; keep everything working at its best. Our maintenance processes ensure safety of every equipment or service we provide to our valued customers and also ensures employees work in the best quality conditions. CDigital only provides maintenance and support services for the projects executed by CDigital or referred by its international partners.</p>',
    'image' => 'upload/featured/1dGNlqYvksUc8nqYPTS7DjvMMWloEpnsNYf4wA3T.png',
    'alt' => 'home laptop',
    'icon' => '<i class="fa fa-home"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:15:27',
    'updated_at' => '2023-11-23 07:15:27',
  ),
);
        DB::table('cd_features')->insert($data);
    }
}
