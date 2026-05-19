<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\PageContent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('Seeding Admin User...');
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        $this->command->info('Seeding Page Content...');
        $contents = [
            'site_name' => 'Patrick',
            'site_title' => 'Patrick Riñon — Portfolio',
            'hero_badge' => 'Available for new opportunities',
            'hero_title' => 'Hi, I\'m <span class="text-accent">Patrick Riñon</span>',
            'hero_description' => 'I am a passionate individual dedicated to excellence and continuous learning.',
            'hero_image' => 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/616854184_4166916863560790_1340631981260973195_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=102&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeHYyeFzbAqsa2GHs_Zs2LhNO0BsLS9CjNM7QGwtL0KM045RH0PHGOmiiz32BtkDT0jwC17Tao6z29FcTvocZR9r&_nc_ohc=Majgl5FRS1MQ7kNvwGo7CxQ&_nc_oc=AdrLeeb92a5QdlgT6WpQ_7r7655HW7cbJnHDmLuFnW0NU9UWNrUH0eWtujH7ku6h1jU&_nc_zt=24&_nc_ht=scontent.fmnl3-4.fna&_nc_gid=VX7KnGbbM1h_egJLjnZV5w&_nc_ss=7b2a8&oh=00_Af6g8EtW4wFXHwYQ9LRSvGxUt6kXGocQzmr9wVBzjYM6fg&oe=6A126E3A',
            'about_image' => 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-1/616854184_4166916863560790_1340631981260973195_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=102&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeHYyeFzbAqsa2GHs_Zs2LhNO0BsLS9CjNM7QGwtL0KM045RH0PHGOmiiz32BtkDT0jwC17Tao6z29FcTvocZR9r&_nc_ohc=Majgl5FRS1MQ7kNvwGo7CxQ&_nc_oc=AdrLeeb92a5QdlgT6WpQ_7r7655HW7cbJnHDmLuFnW0NU9UWNrUH0eWtujH7ku6h1jU&_nc_zt=24&_nc_ht=scontent.fmnl3-4.fna&_nc_gid=VX7KnGbbM1h_egJLjnZV5w&_nc_ss=7b2a8&oh=00_Af6g8EtW4wFXHwYQ9LRSvGxUt6kXGocQzmr9wVBzjYM6fg&oe=6A126E3A',
            'about_title' => 'About Me',
            'about_description1' => 'I am Patrick Riñon, focused on building a strong professional foundation.',
            'education_background' => 'Bachelor of Science in Information Systems, 2027',
            'facebook_url' => 'https://www.facebook.com/patrick.rinon.19',
            'contact_email' => 'patrick@example.com',
            'stat1_value' => '100%',
            'stat1_label' => 'Dedication',
            'stat2_value' => '5+',
            'stat2_label' => 'Certifications',
            'stat3_value' => '2y',
            'stat3_label' => 'Experience',
            'skills' => 'Learning, Problem Solving, Teamwork, Technical Skills',
        ];

        foreach ($contents as $key => $value) {
            PageContent::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        $this->command->info('Seeding Projects...');
        if (Project::count() == 0) {
            Project::create([
                'title' => 'Novu — SaaS Dashboard',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quis, odit nam aperiam fugiat optio libero.',
                'category' => 'SaaS',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=900&q=80',
                'link' => '#',
            ]);

            Project::create([
                'title' => 'Finlo — Fintech App',
                'description' => 'Marketing site and onboarding flow for a personal finance app targeting young professionals.',
                'category' => 'Fintech',
                'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&q=80',
                'link' => '#',
            ]);
        }

        $this->command->info('Database seeding completed successfully!');
    }
}
