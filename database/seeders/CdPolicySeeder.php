<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdPolicySeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_policies' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'description' => '<h1><strong>Privacy Policy of MS CDigital</strong></h1>

<p>MS CDigital operates the http://www.cdigital.com.pk/ website, which provides the SERVICE.</p>

<p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the cdigital.com.pk website.</p>

<p>If you choose to use our Service, then you agree to the collection and use of information in relation with this Policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>

<p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at http://www.cdigital.com.pk/, unless otherwise defined in this Privacy Policy.&nbsp;</p>

<h1><strong>Information Collection and Use</strong></h1>

<p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>

<h1><strong>Service Providers</strong></h1>

<p>We may employ third-party companies and individuals due to the following reasons:</p>

<ul>
	<li>To facilitate our Service;</li>
	<li>To provide the Service on our behalf;</li>
	<li>To perform Service-related services; or</li>
	<li>To assist us in analyzing how our Service is used.</li>
</ul>

<p>We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>

<h1><strong>Security</strong></h1>

<p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>

<h1><strong>Links to Other Sites</strong></h1>

<p>Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>

<h1><strong>Children&rsquo;s Privacy</strong></h1>

<p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>

<h1><strong>Changes to his Privacy Policy</strong></h1>

<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. These changes are effective immediately, after they are posted on this page.</p>

<h1><strong>Contact Us</strong></h1>

<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>

<p>&nbsp;</p>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:30:29',
    'updated_at' => '2023-11-23 12:30:29',
  ),
);
        DB::table('cd_policies')->insert($data);
    }
}
