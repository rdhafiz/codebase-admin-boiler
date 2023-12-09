<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        $avatarStream = file_get_contents('https://ui-avatars.com/api/?name=Secure Administrator');
        $avatar = 'media/images/'.time().'.png';
        file_put_contents(public_path('storage/'.$avatar), $avatarStream);
        Admin::create([
            'name' => 'Secure Administrator',
            'email' => 'secure@admin.com',
            'password' => bcrypt('123asd123'),
            'user_role' => 1,
            'avatar' => $avatar
        ]);
    }
}
