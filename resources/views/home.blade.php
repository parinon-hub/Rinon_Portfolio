@extends('layouts.main')

@section('title', $pageContents['site_title'] ?? 'Eliott — Freelance UI/UX Designer & Frontend Dev')

@section('content')

<!-- ═══ HERO ═══ -->
<section id="hero" class="relative min-h-screen flex items-center pt-16 overflow-hidden">
  <div class="absolute top-1/4 right-0 w-96 h-96 bg-accent/10 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
  <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-zinc-200/50 dark:bg-zinc-800/30 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

  <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 w-full">
    <div class="grid md:grid-cols-2 gap-12 items-center">

      <div>
        <p class="reveal text-sm font-medium text-accent tracking-widest uppercase mb-4">{{ $pageContents['hero_badge'] ?? 'Available for work' }}</p>
        <h1 class="reveal d1 font-display font-bold text-5xl md:text-6xl lg:text-7xl leading-[1.05] tracking-tight text-zinc-900 dark:text-white mb-6">
          {!! $pageContents['hero_title'] ?? 'Hi, I\'m <span class="text-accent">Eliott</span>' !!}
        </h1>
        <p class="reveal d2 text-lg md:text-xl text-zinc-500 dark:text-zinc-400 font-light leading-relaxed max-w-md mb-10">
          {{ $pageContents['hero_description'] ?? 'Freelance UI/UX Designer & Frontend Developer. I design and build digital products that people love to use — fast, clean, and accessible.' }}
        </p>
        <div class="reveal d3 flex flex-wrap gap-4">
          <a href="#work" class="shimmer inline-flex items-center gap-2 bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 font-medium px-7 py-3.5 rounded-full hover:bg-zinc-700 dark:hover:bg-zinc-200 transition-colors text-sm">
            View my work
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <a href="#contact" class="inline-flex items-center gap-2 border border-zinc-300 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 font-medium px-7 py-3.5 rounded-full hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-colors text-sm">Get in touch</a>
        </div>
        <div class="reveal d4 flex gap-8 mt-14 pt-8 border-t border-zinc-100 dark:border-zinc-900">
          <div><p class="font-display font-bold text-3xl text-zinc-900 dark:text-white">{{ $pageContents['stat1_value'] ?? '34+' }}</p><p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">{{ $pageContents['stat1_label'] ?? 'Projects done' }}</p></div>
          <div><p class="font-display font-bold text-3xl text-zinc-900 dark:text-white">{{ $pageContents['stat2_value'] ?? '21+' }}</p><p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">{{ $pageContents['stat2_label'] ?? 'Happy clients' }}</p></div>
          <div><p class="font-display font-bold text-3xl text-zinc-900 dark:text-white">{{ $pageContents['stat3_value'] ?? '5y' }}</p><p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">{{ $pageContents['stat3_label'] ?? 'Experience' }}</p></div>
        </div>
      </div>

      <div class="reveal d2 flex justify-center md:justify-end">
        <div class="relative w-72 h-72 md:w-80 md:h-80 lg:w-96 lg:h-96">
          <div class="pf w-full h-full rounded-3xl">
            <img src="{{ $pageContents['hero_image'] ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&q=80' }}" alt="{{ $pageContents['site_name'] ?? 'Patrick' }}" loading="eager">
          </div>
          <div class="absolute -bottom-4 -left-4 bg-accent text-white font-display font-bold text-sm px-4 py-2.5 rounded-2xl shadow-lg">Open to projects</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ SERVICES ═══ -->
<section id="services" class="py-24 bg-zinc-50 dark:bg-zinc-900/40">
  <div class="max-w-6xl mx-auto px-6">
    <div class="mb-14">
      <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">What I do</p>
      <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">Services</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">

      <article class="reveal d1 card-h group bg-white dark:bg-zinc-900 rounded-2xl p-8 border border-zinc-100 dark:border-zinc-800 hover:border-accent">
        <div class="w-12 h-12 flex items-center justify-center bg-orange-50 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
          <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-3">UI/UX Design</h3>
        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">From wireframes to polished Figma prototypes. Intuitive, visually compelling interfaces that convert visitors into users and put usability first.</p>
      </article>

      <article class="reveal d2 card-h group bg-zinc-900 dark:bg-zinc-800 rounded-2xl p-8 border border-zinc-800 hover:border-accent">
        <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 dark:bg-zinc-700 rounded-xl mb-6 group-hover:bg-accent/20 transition-colors">
          <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl text-white mb-3">Frontend Dev</h3>
        <p class="text-sm text-zinc-400 leading-relaxed">Production-grade code with Tailwind CSS and Alpine.js. Pixel-perfect, fully responsive, SEO-friendly and blazing fast — no bloat, no heavy frameworks.</p>
      </article>

      <article class="reveal d3 card-h group bg-white dark:bg-zinc-900 rounded-2xl p-8 border border-zinc-100 dark:border-zinc-800 hover:border-accent">
        <div class="w-12 h-12 flex items-center justify-center bg-orange-50 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
          <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
        </div>
        <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-3">Landing Pages</h3>
        <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">High-converting pages for SaaS, apps and personal brands. Designed to communicate value instantly and drive action from the first scroll.</p>
      </article>

    </div>
  </div>
</section>

<!-- ═══ WORK ═══ -->
<section id="work" class="py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-14">
      <div>
        <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Portfolio</p>
        <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">Selected work</h2>
      </div>
      <a href="#" class="reveal d1 text-sm font-medium text-zinc-500 dark:text-zinc-400 hover:text-accent transition-colors self-start sm:self-auto nl">All projects →</a>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      @foreach($projects as $project)
      <article class="card-h reveal d{{ $loop->iteration }} group rounded-2xl overflow-hidden bg-zinc-100 dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 hover:border-accent {{ $loop->first ? 'md:row-span-2' : '' }}">
        <div class="pf w-full {{ $loop->first ? 'h-64 md:h-80' : 'h-48' }}">
          <img src="{{ $project->image }}" alt="{{ $project->title }}" loading="lazy">
        </div>
        <div class="p-7">
          <div class="flex flex-wrap gap-2 mb-4">
            <span class="text-xs bg-orange-50 dark:bg-zinc-800 text-accent border border-orange-200 dark:border-zinc-700 px-3 py-1 rounded-full">{{ $project->category }}</span>
          </div>
          <a href="{{ $project->link ?? '#' }}">
            <h3 class="font-display font-bold text-2xl text-zinc-900 dark:text-white mb-2">{{ $project->title }}</h3>
          </a>
          <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-5">{{ Str::limit($project->description, 150) }}</p>
          <a href="{{ $project->link ?? '#' }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-zinc-900 dark:text-white nl">View project <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>

<!-- ═══ ABOUT ═══ -->
<section id="about" class="py-24 bg-zinc-50 dark:bg-zinc-900/40">
  <div class="max-w-6xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-16 items-center">

      <div class="reveal order-2 md:order-1">
        <div class="pf w-full aspect-square max-w-sm mx-auto rounded-3xl">
          <img src="{{ $pageContents['about_image'] ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=700&q=80' }}" alt="{{ $pageContents['site_name'] ?? 'Patrick' }}" loading="lazy">
        </div>
      </div>

      <div class="order-1 md:order-2">
        <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">About me</p>
        <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight mb-6">{!! $pageContents['about_title'] ?? 'A bit about<br>who I am' !!}</h2>
        <p class="reveal d2 text-zinc-500 dark:text-zinc-400 leading-relaxed mb-4">
          {{ $pageContents['about_description1'] ?? 'I am Patrick Riñon, focused on building a strong professional foundation.' }}
        </p>
        <p class="reveal d3 text-zinc-500 dark:text-zinc-400 leading-relaxed mb-8">
          {{ $pageContents['about_description2'] ?? 'I believe in the power of technology to solve real-world problems and am committed to mastering my craft in Information Systems.' }}
        </p>
        <div class="reveal d4">
          <p class="text-xs font-medium text-zinc-500 dark:text-zinc-400 uppercase tracking-widest mb-3">Stack &amp; tools</p>
          <div class="flex flex-wrap gap-2" role="list" aria-label="Skills">
            @foreach(explode(',', $pageContents['skills'] ?? 'Tailwind CSS,Alpine.js,Figma,HTML / CSS,JavaScript,Symfony,Framer,Webflow') as $skill)
            <span role="listitem" class="stag text-sm bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 px-3.5 py-1.5 rounded-full hover:border-accent">{{ trim($skill) }}</span>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══ TESTIMONIALS ═══ -->
<section id="reviews" class="py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="mb-14">
      <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Social proof</p>
      <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">What clients say</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      @foreach($testimonials as $testimonial)
      <blockquote class="reveal d{{ $loop->iteration }} bg-zinc-50 dark:bg-zinc-900 rounded-2xl p-7 border border-zinc-100 dark:border-zinc-800">
        <div class="flex gap-0.5 mb-5" aria-label="5 stars">
            @for($i=0; $i<5; $i++)
          <svg class="w-4 h-4 text-accent fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            @endfor
        </div>
        <p class="text-zinc-600 dark:text-zinc-400 text-sm leading-relaxed mb-6 italic">"{{ $testimonial->feedback }}"</p>
        <footer class="flex items-center gap-3">
          <div class="pf w-10 h-10 rounded-full shrink-0"><img src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}" loading="lazy"></div>
          <div>
            <p class="font-medium text-sm text-zinc-900 dark:text-white">{{ $testimonial->name }}</p>
            <p class="text-xs text-zinc-500">{{ $testimonial->role }}</p>
          </div>
        </footer>
      </blockquote>
      @endforeach
    </div>
  </div>
</section>

<!-- ═══ BLOG ═══ -->
<section id="blog" class="py-24 bg-zinc-50 dark:bg-zinc-900/40">
  <div class="max-w-6xl mx-auto px-6">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-14">
      <div>
        <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Thoughts</p>
        <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white">From the blog</h2>
      </div>
      <a href="#" class="reveal d1 text-sm font-medium text-zinc-500 dark:text-zinc-400 hover:text-accent transition-colors self-start sm:self-auto nl">All articles →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      @foreach($posts as $post)
      <article class="reveal d{{ $loop->iteration }} card-h group bg-white dark:bg-zinc-900 rounded-2xl overflow-hidden border border-zinc-100 dark:border-zinc-800 hover:border-accent">
        <div class="pf w-full h-44">
          <img src="{{ $post->image }}" alt="{{ $post->title }}" loading="lazy">
        </div>
        <div class="p-6">
          <div class="flex items-center gap-3 mb-3">
            <span class="text-xs bg-orange-50 dark:bg-zinc-800 text-accent border border-orange-200 dark:border-zinc-700 px-2.5 py-1 rounded-full">{{ $post->category ?? 'General' }}</span>
            <span class="text-xs text-zinc-400">{{ $post->created_at->format('M d, Y') }}</span>
          </div>
          <a href="#">
            <h3 class="font-display font-bold text-lg text-zinc-900 dark:text-white mb-2 group-hover:text-accent transition-colors">{{ $post->title }}</h3>
          </a>
          <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed mb-4">{{ $post->summary }}</p>
          <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-zinc-900 dark:text-white nl">Read more →</a>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</section>

<!-- ═══ EDUCATION ═══ -->
<section id="education" class="py-24 bg-zinc-50 dark:bg-zinc-900/40 border-t border-zinc-100 dark:border-zinc-900">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Academic</p>
    <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white mb-8">Educational Background</h2>
    <div class="reveal d2 max-w-3xl mx-auto">
        <p class="text-zinc-500 dark:text-zinc-400 leading-relaxed text-lg">
            {{ $pageContents['education_background'] ?? 'Details about your education go here.' }}
        </p>
    </div>
  </div>
</section>

<!-- ═══ CONTACT ═══ -->
<section id="contact" class="py-24">
  <div class="max-w-6xl mx-auto px-6">
    <div class="bg-zinc-900 dark:bg-zinc-800 rounded-3xl p-10 md:p-16 relative overflow-hidden">
      <div class="absolute top-0 right-0 w-64 h-64 bg-accent/20 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
      <div class="absolute bottom-0 left-0 w-40 h-40 bg-accent/10 rounded-full blur-2xl pointer-events-none" aria-hidden="true"></div>

      <div class="relative z-10 grid md:grid-cols-2 gap-12 items-start">

        <div>
          <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Get in touch</p>
          <h2 class="reveal d1 font-display font-bold text-4xl md:text-5xl text-white leading-tight mb-5">Let's work<br>together</h2>
          <p class="reveal d2 text-zinc-400 leading-relaxed mb-8">Feel free to reach out for collaborations or just to say hi!</p>

          <div class="reveal d3 flex flex-col gap-4">
            <a href="mailto:{{ $pageContents['contact_email'] ?? 'hello@example.com' }}" class="group flex items-center gap-3 text-zinc-400 hover:text-white transition-colors">
              <span class="w-9 h-9 flex items-center justify-center bg-zinc-800 rounded-lg group-hover:bg-accent/20 transition-colors shrink-0">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </span>
              <span class="text-sm">{{ $pageContents['contact_email'] ?? 'hello@example.com' }}</span>
            </a>
            @if(isset($pageContents['facebook_url']))
            <a href="{{ $pageContents['facebook_url'] }}" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-3 text-zinc-400 hover:text-white transition-colors">
              <span class="w-9 h-9 flex items-center justify-center bg-zinc-800 rounded-lg group-hover:bg-accent/20 transition-colors shrink-0">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </span>
              <span class="text-sm">Facebook Profile</span>
            </a>
            @endif
          </div>
        </div>

        <div class="reveal d2">
          <form action="#" method="POST" novalidate>
            @csrf
            <div class="flex flex-col gap-4">
              <div class="grid sm:grid-cols-2 gap-4">
                <div>
                  <label for="fname" class="block text-xs font-medium text-zinc-400 mb-1.5">Name <span aria-hidden="true">*</span></label>
                  <input type="text" id="fname" name="name" placeholder="Jane Smith" required autocomplete="name"
                    class="w-full bg-zinc-800 border border-zinc-700 text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-600 focus:outline-none focus:border-accent transition-colors">
                </div>
                <div>
                  <label for="femail" class="block text-xs font-medium text-zinc-400 mb-1.5">Email <span aria-hidden="true">*</span></label>
                  <input type="email" id="femail" name="email" placeholder="jane@company.com" required autocomplete="email"
                    class="w-full bg-zinc-800 border border-zinc-700 text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-600 focus:outline-none focus:border-accent transition-colors">
                </div>
              </div>
              <div>
                <label for="fsubject" class="block text-xs font-medium text-zinc-400 mb-1.5">Subject</label>
                <input type="text" id="fsubject" name="subject" placeholder="Project inquiry"
                  class="w-full bg-zinc-800 border border-zinc-700 text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-600 focus:outline-none focus:border-accent transition-colors">
              </div>
              <div>
                <label for="fmessage" class="block text-xs font-medium text-zinc-400 mb-1.5">Message <span aria-hidden="true">*</span></label>
                <textarea id="fmessage" name="message" rows="4" placeholder="Tell me about your project..." required
                  class="w-full bg-zinc-800 border border-zinc-700 text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-600 focus:outline-none focus:border-accent transition-colors resize-none"></textarea>
              </div>
              <button type="submit" class="shimmer w-full bg-accent text-white font-display font-bold text-sm py-3.5 rounded-xl hover:bg-accent-light transition-colors">
                Send message →
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>

@endsection
