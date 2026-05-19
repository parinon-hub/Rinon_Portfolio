<x-guest-layout>
    <div class="bg-white dark:bg-zinc-900 border border-zinc-100 dark:border-zinc-800 rounded-3xl p-8 md:p-10 shadow-sm relative overflow-hidden">
        <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full blur-2xl pointer-events-none"></div>
        
        <div class="mb-8 text-center">
            <a href="/" class="font-display font-bold text-2xl tracking-tight inline-block mb-4">
                <span class="text-zinc-900 dark:text-white">eli</span><span class="text-accent">ott</span>
            </a>
            <h2 class="font-display font-bold text-2xl text-zinc-900 dark:text-white">Admin Login</h2>
            <p class="text-sm text-zinc-500 dark:text-zinc-400 mt-2">Enter your credentials to access the dashboard</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-1.5">Email Address</label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
                    class="w-full bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-900 dark:text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-400 focus:outline-none focus:border-accent transition-colors">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-xs font-medium text-zinc-500 uppercase tracking-widest mb-1.5">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="w-full bg-zinc-50 dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 text-zinc-900 dark:text-white text-sm rounded-xl px-4 py-3 placeholder-zinc-400 focus:outline-none focus:border-accent transition-colors">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between">
                <label for="remember_me" class="inline-flex items-center cursor-pointer">
                    <input id="remember_me" type="checkbox" class="rounded border-zinc-300 dark:border-zinc-700 text-accent shadow-sm focus:ring-accent bg-zinc-50 dark:bg-zinc-800" name="remember">
                    <span class="ms-2 text-xs text-zinc-500 dark:text-zinc-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-xs text-accent hover:text-accent-light transition-colors" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <div class="pt-2">
                <button type="submit" class="relative overflow-hidden w-full bg-accent text-white font-display font-bold text-sm py-4 rounded-xl hover:bg-accent-light transition-all active:scale-[0.98] group">
                    <span class="relative z-10 flex items-center justify-center gap-2">
                        {{ __('Sign In') }} 
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </span>
                </button>
            </div>
        </form>
        
        <div class="mt-8 text-center">
            <a href="/" class="text-xs text-zinc-500 hover:text-zinc-900 dark:hover:text-white transition-colors">
                ← Back to website
            </a>
        </div>
    </div>
</x-guest-layout>
