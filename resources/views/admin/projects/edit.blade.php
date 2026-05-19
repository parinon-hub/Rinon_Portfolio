<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
            {{ __('Update') }} <br><span class="text-accent">{{ $project->title }}</span>
        </h2>
    </x-slot>

    <div class="max-w-2xl">
        <div class="admin-card">
            <form action="{{ route('projects.update', $project) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Project Title</label>
                    <input type="text" name="title" value="{{ $project->title }}" class="input-style" required>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Category</label>
                        <input type="text" name="category" value="{{ $project->category }}" class="input-style" required placeholder="e.g. SaaS, Fintech">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Link (Optional)</label>
                        <input type="text" name="link" value="{{ $project->link }}" class="input-style" placeholder="https://...">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Image URL</label>
                    <input type="text" name="image" value="{{ $project->image }}" class="input-style" required>
                    <p class="mt-2 text-[10px] text-zinc-400">Use Unsplash or Pravatar URLs for now.</p>
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Short Description</label>
                    <textarea name="description" rows="4" class="input-style resize-none" required>{{ $project->description }}</textarea>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <button type="submit" class="btn-primary">
                        Update Project
                    </button>
                    <a href="{{ route('projects.index') }}" class="btn-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
