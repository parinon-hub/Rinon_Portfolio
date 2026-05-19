<x-app-layout>
    <x-slot name="header">
        <p class="text-xs font-medium text-accent tracking-widest uppercase mb-3">Settings</p>
        <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
            {{ __('Page Content') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl">
        @if(session('success'))
            <div class="bg-orange-50 dark:bg-zinc-800 border border-accent/20 text-accent px-4 py-3 rounded-xl mb-6 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('page-content.update') }}" method="POST" class="space-y-12">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Site Identity -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">Site Identity</h3>
                    @foreach($contents->whereIn('key', ['site_name', 'site_title', 'meta_description']) as $content)
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">{{ ucwords(str_replace('_', ' ', $content->key)) }}</label>
                        @if($content->key === 'meta_description')
                            <textarea name="{{ $content->key }}" rows="3" class="input-style resize-none">{{ $content->value }}</textarea>
                        @else
                            <input type="text" name="{{ $content->key }}" value="{{ $content->value }}" class="input-style">
                        @endif
                    </div>
                    @endforeach
                </div>

                <!-- Hero Section -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">Hero Section</h3>
                    @foreach($contents->whereIn('key', ['hero_badge', 'hero_title', 'hero_description', 'hero_image']) as $content)
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">{{ ucwords(str_replace('_', ' ', $content->key)) }}</label>
                        @if($content->key === 'hero_description')
                            <textarea name="{{ $content->key }}" rows="3" class="input-style resize-none">{{ $content->value }}</textarea>
                        @else
                            <input type="text" name="{{ $content->key }}" value="{{ $content->value }}" class="input-style">
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Stats -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">Statistics</h3>
                    <div class="grid grid-cols-2 gap-4">
                        @foreach($contents->whereIn('key', ['stat1_value', 'stat1_label', 'stat2_value', 'stat2_label', 'stat3_value', 'stat3_label']) as $content)
                        <div>
                            <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">{{ ucwords(str_replace('_', ' ', $content->key)) }}</label>
                            <input type="text" name="{{ $content->key }}" value="{{ $content->value }}" class="input-style">
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- About & Skills -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">About & Skills</h3>
                    @foreach($contents->whereIn('key', ['about_title', 'about_description1', 'about_description2', 'skills']) as $content)
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">{{ ucwords(str_replace('_', ' ', $content->key)) }}</label>
                        @if(Str::contains($content->key, 'description'))
                            <textarea name="{{ $content->key }}" rows="3" class="input-style resize-none">{{ $content->value }}</textarea>
                        @else
                            <input type="text" name="{{ $content->key }}" value="{{ $content->value }}" class="input-style">
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Education -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">Education</h3>
                    @foreach($contents->whereIn('key', ['education_background']) as $content)
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Details</label>
                        <textarea name="{{ $content->key }}" rows="4" class="input-style resize-none">{{ $content->value }}</textarea>
                    </div>
                    @endforeach
                </div>

                <!-- Contact & Social -->
                <div class="space-y-6">
                    <h3 class="font-display font-bold text-xl text-zinc-900 dark:text-white">Contact & Social</h3>
                    @foreach($contents->whereIn('key', ['contact_email', 'facebook_url']) as $content)
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">{{ ucwords(str_replace('_', ' ', $content->key)) }}</label>
                        <input type="text" name="{{ $content->key }}" value="{{ $content->value }}" class="input-style">
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end pt-10 border-t border-zinc-100 dark:border-zinc-800">
                <button type="submit" class="btn-primary">
                    Update All Settings
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
