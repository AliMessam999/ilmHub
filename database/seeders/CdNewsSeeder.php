<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdNewsSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_news' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Bio-Innovation for the Future—Sustainable Agriculture with Microbial Technology',
    'slug' => NULL,
    'description' => '<p>Partnering with ARID University Rawalpindi, CDigital advanced a groundbreaking initiative in bio-product development to promote sustainable agriculture. Using probiotic fermentation techniques, the project led to the creation of powerful biopesticides, bioherbicides, and biofertilizers aimed at rejuvenating soil health and boosting crop productivity.</p>

<p>&nbsp;</p>

<p>The results are promising and planet-friendly. Farmers can now reduce dependency on chemical inputs while increasing yield and improving soil quality. This not only enhances agricultural profitability but also fosters long-term ecological balance. CDigital&rsquo;s venture into biotechnology for agriculture represents a visionary approach to tackling global food security and environmental challenges&mdash;placing innovation at the heart of sustainable farming.</p>

<p bis_size="{&quot;x&quot;:19,&quot;y&quot;:74,&quot;w&quot;:959,&quot;h&quot;:20,&quot;abs_x&quot;:361,&quot;abs_y&quot;:619}">&nbsp;</p>

<p bis_size="{&quot;x&quot;:19,&quot;y&quot;:108,&quot;w&quot;:959,&quot;h&quot;:20,&quot;abs_x&quot;:361,&quot;abs_y&quot;:653}">&nbsp;</p>',
    'image' => 'upload/news/upload/news/xbchytqs4bKR3jxVujfggswPnrdUfVUrys0kUEQC.jpg',
    'alt' => 'Bio-Innovation for the Future—Sustainable Agriculture with Microbial Technology',
    'date' => '2020-11-25',
    'tags' => '/news/details/Bio-Innovation for the Future—Sustainable Agriculture with Microbial Technology',
    'category_id' => 3,
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 11:34:00',
    'updated_at' => '2025-05-15 10:22:00',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Smart Flood Forecasting—Harnessing Technology to Save Lives and Livelihoods',
    'slug' => NULL,
    'description' => '<p>In collaboration with WAPDA and the Irrigation Department of KPK, CDigital engineered a state-of-the-art flood forecasting and real-time telemetry system between 2019 and 2020. The system featured cutting-edge tools such as ultrasonic river level sensors, turbidity meters, multi-parameter weather stations, and solar-powered dataloggers. Integrated with custom discharge software and supported by a 24-month satellite data package, the platform delivered advanced, cloud-based monitoring and alert services.</p>

<p>&nbsp;</p>

<p>The value of this initiative is in its life-saving potential. With the ability to predict and respond to flood threats in real time, authorities can now issue timely warnings, mobilize emergency resources, and mitigate damage to lives and property. In KPK, this meant a significant reduction in response time, bolstered disaster resilience, and proactive community safeguarding. CDigital&rsquo;s flood management solutions have set a new standard in environmental intelligence and disaster preparedness.</p>

<p>&nbsp;</p>',
    'image' => 'upload/news/Ng8A3WfXev8XhS8WIxGfoAs1rH1L93jPHP0rbiWL.jpg',
    'alt' => 'Smart Flood Forecasting—Harnessing Technology to Save Lives and Livelihoods',
    'date' => '2020-12-08',
    'tags' => '/news/details/Smart Flood Forecasting—Harnessing Technology to Save Lives and Livelihoods',
    'category_id' => 2,
    'deleted_at' => NULL,
    'created_at' => '2023-11-24 05:00:00',
    'updated_at' => '2025-05-15 10:21:21',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Revolutionizing Justice Delivery in Pakistan and AJK through Digital Innovation',
    'slug' => NULL,
    'description' => '<p>In a pioneering step toward modern governance, CDigital played a transformative role in automating the Lower Judiciary across Pakistan and Azad Jammu &amp; Kashmir (AJK). With an expansive scope that covered everything from workflow management at district and tehsil levels to mobile app development, biometric attendance systems, and integration with the Supreme Court&rsquo;s MIS, the initiative marked a major milestone in legal tech innovation. Both projects included full-scale deployment of IT infrastructure&mdash;comprising scanners, routers, firewalls, video conferencing, and computing systems&mdash;customized to meet the rigorous demands of judicial administration.</p>

<p>&nbsp;</p>

<p>The impact of this transformation has been profound. Courts are now empowered with real-time access to case files, enabling quicker decisions and improved administrative efficiency. For citizens, this translates to reduced processing times, streamlined case registration, and enhanced access to justice. In AJK, digital access has bridged geographical gaps, ensuring remote availability of legal services and transparent recordkeeping. CDigital&rsquo;s solution has thus redefined how justice is accessed and delivered, ushering in a new era of digital empowerment within the judiciary.</p>

<p>&nbsp;</p>',
    'image' => 'upload/news/62k3wO6TnXfqwszzEYk9vOywYSW8u6xyjSv34tGr.jpg',
    'alt' => 'Revolutionizing Justice Delivery in Pakistan and AJK through Digital Innovation',
    'date' => '2021-01-28',
    'tags' => '/news/details/Revolutionizing Justice Delivery in Pakistan and AJK through Digital Innovation',
    'category_id' => 1,
    'deleted_at' => NULL,
    'created_at' => '2023-11-30 05:00:00',
    'updated_at' => '2025-05-15 10:20:32',
  ),
);
        DB::table('cd_news')->insert($data);
    }
}
