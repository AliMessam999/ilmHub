<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFaqSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_faqs' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'What is Customer Experience (CX) and why is it important?',
    'sub_category_id' => 15,
    'description' => '<p>Customer Experience (CX) refers to the overall impression a customer has of a business based on their interactions across various touchpoints&mdash;whether it&rsquo;s a website visit, a customer support call, or an in-store purchase. It encompasses everything from ease of navigation and service quality to emotional connection and brand perception.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:31:27',
    'updated_at' => '2025-11-15 07:31:27',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'How can your Customer Experience Solutions benefit?',
    'sub_category_id' => 15,
    'description' => '<p>Our solutions optimize every touchpoint of the customer journey, ensuring seamless, personalized, and meaningful interactions. The benefits include improved customer satisfaction, higher retention rates, stronger brand loyalty, and actionable insights to continuously improve your customer engagement strategies. We help integrate these channels so customers feel valued.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:32:04',
    'updated_at' => '2025-11-15 07:32:04',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'How do you personalize the customer experience?',
    'sub_category_id' => 15,
    'description' => '<p>Getting started is easy! Simply reach out to us through our contact form or give us a call, and we&rsquo;ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:32:38',
    'updated_at' => '2025-11-15 07:32:38',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'What kind of tools do you use to improve customer experience?',
    'sub_category_id' => 15,
    'description' => '<p>Getting started is easy! Simply reach out to us through our contact form or give us a call, and we&rsquo;ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:33:08',
    'updated_at' => '2025-11-15 07:33:08',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'How do you collect customer feedback?',
    'sub_category_id' => 15,
    'description' => '<p>Getting started is easy! Simply reach out to us through our contact form or give us a call, and we&rsquo;ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:33:38',
    'updated_at' => '2025-11-15 07:33:38',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Can you help improve our customer support system?',
    'sub_category_id' => 15,
    'description' => '<p>Getting started is easy! Simply reach out to us through our contact form or give us a call, and we&rsquo;ll schedule a consultation to discuss your project and how we can best assist you. Our team keeps you informed throughout the process, ensuring quality control and timely delivery.</p>',
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 07:34:17',
    'updated_at' => '2025-11-15 07:34:17',
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Ali Messam',
    'sub_category_id' => 15,
    'description' => '<p>Ali Meesam</p>',
    'deleted_at' => '2025-11-15 07:58:46',
    'created_at' => '2025-11-15 07:58:21',
    'updated_at' => '2025-11-15 07:58:46',
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'Software Solution FAQ',
    'sub_category_id' => 8,
    'description' => '<p>Want Faq for&nbsp;Software Solutions</p>',
    'deleted_at' => '2025-11-17 11:04:13',
    'created_at' => '2025-11-17 11:03:17',
    'updated_at' => '2025-11-17 11:04:13',
  ),
);
        DB::table('cd_faqs')->insert($data);
    }
}
