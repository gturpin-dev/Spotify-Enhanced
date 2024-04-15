<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Spotify Account Linked') }}
        </h2>
    </header>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Your Spotify id : ') }} {{ auth()->user()->spotify_id }}
    </p>
</section>
