<?php

namespace Database\Seeders;

use App\Models\WebsitePages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class WebsitePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsitePages::truncate();
        $WebsitePages = array(
            [
                'page' => 'home',
                'slug' => '',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Title',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'training',
                'slug' => 'training',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Training',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'jobs',
                'slug' => 'jobs',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Jobs',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'ic',
                'slug' => 'international-candidate',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'International Candidate',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'resources',
                'slug' => 'resources',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Resources',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'about',
                'slug' => 'about',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'About',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'cookie',
                'slug' => 'cookie-policy',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Cookie Policy',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'privacy',
                'slug' => 'privacy-policy',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Privacy Policy',
                    'keyword' => '',
                    'description' => '',
                ]
            ],
            [
                'page' => 'terms',
                'slug' => 'terms-of-use',
                'dynamic' => 0,
                'meta' => [
                    'image' => '',
                    'title' => 'Terms of Use',
                    'keyword' => '',
                    'description' => '',
                ]
            ]
        );
        foreach ($WebsitePages as &$WebsitePage){
            if(empty($WebsitePage['meta']['image'])){

                $mediaPath = public_path('storage/media/page-banner');
                if(!file_exists($mediaPath)){
                    mkdir($mediaPath, 0777);
                }
                $imagePath = 'media/page-banner/'.$WebsitePage['page'].'.png';
                $image = file_get_contents('https://placehold.co/1500x800/png   ');
                Storage::disk('public')->put($imagePath, $image);
                $WebsitePage['meta']['image'] = $imagePath;

            }
        }
        WebsitePages::insert($WebsitePages);
    }
}
