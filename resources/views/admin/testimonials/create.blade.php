<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
            {{ __('Add New') }} <br><span class="text-accent">Review</span>
        </h2>
    </x-slot>

    <div class="max-w-2xl">
        <div class="admin-card">
            <form action="{{ route('testimonials.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Client Name</label>
                        <input type="text" name="name" class="input-style" required placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Role/Company</label>
                        <input type="text" name="role" class="input-style" required placeholder="CEO at Acme">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Image URL</label>
                    <input type="text" name="image" class="input-style" required placeholder="https://i.pravatar.cc/...">
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Feedback</label>
                    <textarea name="feedback" rows="5" class="input-style resize-none" required placeholder="What did they say?"></textarea>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <button type="submit" class="btn-primary">
                        Save Review
                    </button>
                    <a href="{{ route('testimonials.index') }}" class="btn-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
