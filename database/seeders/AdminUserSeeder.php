<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Services\MediaServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!file_exists(public_path('storage/media/'))){
            mkdir(public_path('storage/media/'), 0777);
        }
        if(!file_exists(public_path('storage/media/images/'))){
            mkdir(public_path('storage/media/images/'), 0777);
        }

        Admin::truncate();

        // Developer
        $avatar = MediaServices::uploadDummy('Secure Developer');
        Admin::create([
            'name' => 'Secure Developer',
            'email' => 'secure@developer.com',
            'password' => bcrypt('123asd123'),
            'user_role' => Admin::$Developer,
            'avatar' => $avatar
        ]);

        // Super Admin
        $avatar = MediaServices::uploadDummy('Secure Administrator');
        Admin::create([
            'name' => 'Secure Administrator',
            'email' => 'secure@admin.com',
            'password' => bcrypt('123asd123'),
            'user_role' => Admin::$SuperAdmin,
            'avatar' => $avatar
        ]);

        // Course Planner
        $avatar = MediaServices::uploadDummy('Course Planner');
        Admin::create([
            'name' => 'Course Planner',
            'email' => 'course.planner@admin.com',
            'password' => bcrypt('123asd123'),
            'user_role' => Admin::$CoursePlanner,
            'avatar' => $avatar
        ]);

        // Finance Manager
        $avatar = MediaServices::uploadDummy('Finance Manager');
        Admin::create([
            'name' => 'Finance Manager',
            'email' => 'finance.manager@admin.com',
            'password' => bcrypt('123asd123'),
            'user_role' => Admin::$FinanceManager,
            'avatar' => $avatar
        ]);
    }
}
