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
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

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

        Post::create([
            'title' => 'Why I ditched heavy CSS frameworks for Tailwind',
            'summary' => 'After years of fighting specificity wars, here\'s what finally convinced me to make the switch.',
            'content' => 'Full article content here...',
            'image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=700&q=80',
            'category' => 'Design',
        ]);

        Testimonial::create([
            'name' => 'Sarah Müller',
            'role' => 'CPO, Novu',
            'feedback' => 'Eliott delivered our redesign in record time and the quality blew us away. Our conversion rate jumped 28% in the first month. Absolutely recommend.',
            'image' => 'https://i.pravatar.cc/80?img=11',
        ]);

        PageContent::create(['key' => 'site_name', 'value' => 'Patrick']);
        PageContent::create(['key' => 'site_title', 'value' => 'Patrick Riñon — Portfolio']);
        PageContent::create(['key' => 'hero_badge', 'value' => 'Available for new opportunities']);
        PageContent::create(['key' => 'hero_title', 'value' => 'Hi, I\'m <span class="text-accent">Patrick Riñon</span>']);
        PageContent::create(['key' => 'hero_description', 'value' => 'I am a passionate individual dedicated to excellence and continuous learning.']);
        PageContent::create(['key' => 'hero_image', 'value' => 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/616854184_4166916863560790_1340631981260973195_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHYyeFzbAqsa2GHs_Zs2LhNO0BsLS9CjNM7QGwtL0KM045RH0PHGOmiiz32BtkDT0jwC17Tao6z29FcTvocZR9r&_nc_ohc=EM3W6Eg3TQIQ7kNvwF8lVOw&_nc_oc=Adq8rnOgcwQUcZcrC58jgFbWqAEQXxtNMb61eATcw-E4OnLbt7imT7LuQe2G5FY4KmU&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&_nc_gid=-B8OjwqBbsQgvS-OOfrnCQ&_nc_ss=7b2a8&oh=00_Af5ABq4LrS8BVvUu90DFUlk4nYXIzaoQuSD8y2bjlQJylw&oe=6A0BAEBC']);
        PageContent::create(['key' => 'about_image', 'value' => 'https://scontent.fmnl3-4.fna.fbcdn.net/v/t39.30808-6/616854184_4166916863560790_1340631981260973195_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHYyeFzbAqsa2GHs_Zs2LhNO0BsLS9CjNM7QGwtL0KM045RH0PHGOmiiz32BtkDT0jwC17Tao6z29FcTvocZR9r&_nc_ohc=EM3W6Eg3TQIQ7kNvwF8lVOw&_nc_oc=Adq8rnOgcwQUcZcrC58jgFbWqAEQXxtNMb61eATcw-E4OnLbt7imT7LuQe2G5FY4KmU&_nc_zt=23&_nc_ht=scontent.fmnl3-4.fna&_nc_gid=-B8OjwqBbsQgvS-OOfrnCQ&_nc_ss=7b2a8&oh=00_Af5ABq4LrS8BVvUu90DFUlk4nYXIzaoQuSD8y2bjlQJylw&oe=6A0BAEBC']);
        PageContent::create(['key' => 'about_title', 'value' => 'About Me']);
        PageContent::create(['key' => 'about_description1', 'value' => 'I am Patrick Riñon, focused on building a strong professional foundation.']);
        PageContent::create(['key' => 'education_background', 'value' => 'Bachelor of Science in Information Systems, 2027']);
        PageContent::create(['key' => 'facebook_url', 'value' => 'https://www.facebook.com/patrick.rinon.19']);
        PageContent::create(['key' => 'contact_email', 'value' => 'patrick@example.com']);
        PageContent::create(['key' => 'stat1_value', 'value' => '100%']);
        PageContent::create(['key' => 'stat1_label', 'value' => 'Dedication']);
        PageContent::create(['key' => 'stat2_value', 'value' => '5+']);
        PageContent::create(['key' => 'stat2_label', 'value' => 'Certifications']);
        PageContent::create(['key' => 'stat3_value', 'value' => '2y']);
        PageContent::create(['key' => 'stat3_label', 'value' => 'Experience']);
        PageContent::create(['key' => 'skills', 'value' => 'Learning, Problem Solving, Teamwork, Technical Skills']);
    }
}
