<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\PageContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        $posts = Post::latest()->take(3)->get();
        $testimonials = Testimonial::all();
        $pageContents = PageContent::pluck('value', 'key')->toArray();

        return view('home', compact('projects', 'posts', 'testimonials', 'pageContents'));
    }
}
