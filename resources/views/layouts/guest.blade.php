<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="app()" :class="{'dark':dark}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
        </style>
    </head>
    <body class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100 antialiased min-h-screen flex items-center justify-center p-6">
        <div class="relative z-10 w-full max-w-md">
            {{ $slot }}
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
