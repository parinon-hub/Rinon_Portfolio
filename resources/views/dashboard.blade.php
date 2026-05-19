<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
            {{ __('Welcome back,') }} <br><span class="text-accent">{{ Auth::user()->name }}</span>
        </h2>
    </x-slot>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <a href="{{ route('projects.index') }}" class="group admin-card hover:border-accent">
            <div class="w-12 h-12 flex items-center justify-center bg-orange-50 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
            </div>
            <h4 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-2">Projects</h4>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Manage your work portfolio and case studies.</p>
        </a>

        <a href="{{ route('posts.index') }}" class="group admin-card hover:border-accent">
            <div class="w-12 h-12 flex items-center justify-center bg-zinc-100 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"/></svg>
            </div>
            <h4 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-2">Blog Posts</h4>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Write and publish thoughts on design and dev.</p>
        </a>

        <a href="{{ route('testimonials.index') }}" class="group admin-card hover:border-accent">
            <div class="w-12 h-12 flex items-center justify-center bg-zinc-100 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
            </div>
            <h4 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-2">Reviews</h4>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Manage what your clients are saying about you.</p>
        </a>

        <a href="{{ route('page-content.index') }}" class="group admin-card hover:border-accent">
            <div class="w-12 h-12 flex items-center justify-center bg-zinc-100 dark:bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
            </div>
            <h4 class="font-display font-bold text-xl text-zinc-900 dark:text-white mb-2">Site Settings</h4>
            <p class="text-sm text-zinc-500 dark:text-zinc-400">Update hero text, about section, and social links.</p>
        </a>
    </div>
</x-app-layout>
