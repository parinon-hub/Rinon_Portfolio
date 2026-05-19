<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <p class="text-xs font-medium text-accent tracking-widest uppercase mb-3">Testimonials</p>
                <h2 class="font-display font-bold text-4xl md:text-5xl text-zinc-900 dark:text-white leading-tight">
                    {{ __('Manage Reviews') }}
                </h2>
            </div>
            <a href="{{ route('testimonials.create') }}" class="btn-primary">
                Add Review <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            </a>
        </div>
    </x-slot>

    <div class="admin-card">
        @if(session('success'))
            <div class="bg-orange-50 dark:bg-zinc-800 border border-accent/20 text-accent px-4 py-3 rounded-xl mb-6 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-zinc-100 dark:border-zinc-800">
                        <th class="py-4 font-display font-bold text-zinc-900 dark:text-white uppercase tracking-wider text-xs">Client</th>
                        <th class="py-4 font-display font-bold text-zinc-900 dark:text-white uppercase tracking-wider text-xs">Role</th>
                        <th class="py-4 font-display font-bold text-zinc-900 dark:text-white uppercase tracking-wider text-xs text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 dark:divide-zinc-800 text-sm">
                    @foreach($testimonials as $testimonial)
                    <tr class="group hover:bg-zinc-50 dark:hover:bg-zinc-800/50 transition-colors">
                        <td class="py-4 pr-4">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full overflow-hidden bg-zinc-100 dark:bg-zinc-800 flex-shrink-0">
                                    <img src="{{ $testimonial->image }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <span class="font-medium text-zinc-900 dark:text-white">{{ $testimonial->name }}</span>
                            </div>
                        </td>
                        <td class="py-4">
                            <span class="text-xs text-zinc-500 dark:text-zinc-400">{{ $testimonial->role }}</span>
                        </td>
                        <td class="py-4 text-right">
                            <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('testimonials.edit', $testimonial) }}" class="text-zinc-500 hover:text-accent transition-colors">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                </a>
                                <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-zinc-500 hover:text-red-500 transition-colors">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
