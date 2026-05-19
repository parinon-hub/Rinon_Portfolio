<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="app()" :class="{'dark':dark}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - Admin</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">

        <script>
        tailwind.config = {
          darkMode: 'class',
          theme: {
            extend: {
              fontFamily: { display: ['PT Sans','sans-serif'], body: ['DM Sans','sans-serif'] },
              colors: { accent: '#FF6B2B', 'accent-light': '#FF8F5C' }
            }
          }
        }
        </script>

        <style>
        *,*::before,*::after{box-sizing:border-box}
        html,body{font-family:'DM Sans',sans-serif}
        h1,h2,h3,h4,h5,h6{font-family:'PT Sans',sans-serif}
        body{transition:background-color .3s,color .3s}

        /* noise overlay */
        body::before{content:'';position:fixed;inset:0;pointer-events:none;z-index:0;opacity:.35;
        background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.05'/%3E%3C/svg%3E")}

        [x-cloak]{display:none!important}

        /* card style */
        .admin-card { @apply bg-white dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 rounded-2xl p-6 transition-all; }
        .input-style { @apply w-full bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-900 dark:text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-400 focus:outline-none focus:border-accent transition-colors; }
        .btn-primary { @apply inline-flex items-center gap-2 bg-accent text-white font-medium px-6 py-2.5 rounded-full hover:bg-accent-light transition-colors text-sm; }
        .btn-secondary { @apply inline-flex items-center gap-2 border border-zinc-300 dark:border-zinc-700 text-zinc-700 dark:text-zinc-300 font-medium px-6 py-2.5 rounded-full hover:bg-zinc-50 dark:hover:bg-zinc-900 transition-colors text-sm; }
        </style>
    </head>
    <body class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 antialiased min-h-screen">
        <div class="relative z-10">
            <!-- Navigation -->
            <nav class="border-b border-zinc-100 dark:border-zinc-900 bg-white/90 dark:bg-zinc-950/90 backdrop-blur-md">
                <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
                    <a href="{{ route('home') }}" class="font-display font-bold text-xl tracking-tight">
                        <span class="text-zinc-900 dark:text-white">eli</span><span class="text-accent">ott</span> <span class="text-sm font-light text-zinc-400">Admin</span>
                    </a>

                    <div class="flex items-center gap-6">
                        <ul class="hidden md:flex items-center gap-6 text-sm font-medium">
                            <li><a href="{{ route('dashboard') }}" class="hover:text-accent {{ request()->routeIs('dashboard') ? 'text-accent' : 'text-zinc-500' }}">Dashboard</a></li>
                            <li><a href="{{ route('projects.index') }}" class="hover:text-accent {{ request()->is('admin/projects*') ? 'text-accent' : 'text-zinc-500' }}">Projects</a></li>
                            <li><a href="{{ route('posts.index') }}" class="hover:text-accent {{ request()->is('admin/posts*') ? 'text-accent' : 'text-zinc-500' }}">Blog</a></li>
                            <li><a href="{{ route('testimonials.index') }}" class="hover:text-accent {{ request()->is('admin/testimonials*') ? 'text-accent' : 'text-zinc-500' }}">Reviews</a></li>
                            <li><a href="{{ route('page-content.index') }}" class="hover:text-accent {{ request()->is('admin/page-content*') ? 'text-accent' : 'text-zinc-500' }}">Content</a></li>
                        </ul>

                        <div class="flex items-center gap-3">
                            <button @click="dark=!dark" class="w-9 h-9 flex items-center justify-center rounded-full border border-zinc-200 dark:border-zinc-800 transition-colors">
                                <svg x-show="!dark" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"/></svg>
                                <svg x-show="dark"  class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
                            </button>
                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-sm font-medium text-zinc-500 hover:text-accent">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="py-10">
                    <div class="max-w-6xl mx-auto px-6">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="pb-24">
                <div class="max-w-6xl mx-auto px-6">
                    {{ $slot }}
                </div>
            </main>
        </div>

        <script>
        function app() {
          return {
            dark: localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
            init() {
              this.$watch('dark', v => localStorage.setItem('theme', v ? 'dark' : 'light'));
            }
          }
        }
        </script>
    </body>
</html>
