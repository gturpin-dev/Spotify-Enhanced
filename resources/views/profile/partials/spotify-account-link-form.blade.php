<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Spotify Account Not Linked') }}
        </h2>
    </header>

    <p class="mt-1 mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('You must link your Spotify account to properly use the app, please click on the link below to do so') }}
    </p>

    <a href="{{ route('auth.spotify') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
        {{ __('Link Spotify Account') }}
    </a>
</section>
