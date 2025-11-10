<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\UserSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\PermissionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $seeds = [
        CdCareerSeeder::class,
        CdMenuSeeder::class,
        CdCategorySeeder::class,
        CdClientSeeder::class,
        CdContactSeeder::class,
        CdCoreValueSeeder::class,
        CdFaqSeeder::class,
        CdFeatureSeeder::class,
        CdFeatureImageSeeder::class,
        CdGallarySeeder::class,
        CdNewsSeeder::class,
        CdOfferSeeder::class,
        CdPartnerSeeder::class,
        CdPolicySeeder::class,
        CdProfileSeeder::class,
        CdSkillSeeder::class,
        CdSliderSeeder::class,
        CdSolutionSeeder::class,
        CdTeamMemberSeeder::class,
        CdTermConditionSeeder::class,
        CdTestimonialSeeder::class,
    ];
        array_push($seeds,
            UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
        );
        $this->call($seeds);
       
    }
}
