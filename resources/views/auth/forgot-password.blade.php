<x-guest-layout>
    <div class="bg-white dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 rounded-3xl p-8 md:p-10 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full blur-2xl pointer-events-none"></div>
        
        <div class="mb-8 text-center">
            <h2 class="font-display font-bold text-2xl text-zinc-900 dark:text-white">Forgot Password</h2>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-2">No problem. Just let us know your email address and we will email you a password reset link.</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-1.5">Email Address</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus
                    class="w-full bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-900 dark:text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-400 focus:outline-none focus:border-accent transition-colors">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
            </div>

            <div class="pt-2">
                <button type="submit" class="w-full bg-accent text-white font-display font-bold text-sm py-4 rounded-xl hover:bg-accent-light transition-all active:scale-[0.98]">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <a href="{{ route('login') }}" class="text-xs text-zinc-500 hover:text-zinc-900 dark:hover:text-white transition-colors">
                ← Back to login
            </a>
        </div>
    </div>
</x-guest-layout>
