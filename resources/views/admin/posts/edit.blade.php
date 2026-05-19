<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
            {{ __('Update') }} <br><span class="text-accent">{{ $post->title }}</span>
        </h2>
    </x-slot>

    <div class="max-w-3xl">
        <div class="admin-card">
            <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Post Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="input-style" required>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Category</label>
                        <input type="text" name="category" value="{{ $post->category }}" class="input-style" required>
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Image URL</label>
                        <input type="text" name="image" value="{{ $post->image }}" class="input-style" required>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Short Summary</label>
                    <textarea name="summary" rows="3" class="input-style resize-none" required>{{ $post->summary }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-2">Article Content</label>
                    <textarea name="content" rows="10" class="input-style" required>{{ $post->content }}</textarea>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <button type="submit" class="btn-primary">
                        Update Post
                    </button>
                    <a href="{{ route('posts.index') }}" class="btn-secondary">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
