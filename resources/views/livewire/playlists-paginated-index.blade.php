<div class="min-h-screen">

        <div class="flex gap-4 mb-4">
            <input type="text" wire:model.live.debounce.250ms="search" placeholder="{{ __('Search for playlists...') }}"
                   class="flex-1 px-4 py-2 border rounded shadow focus:outline-none focus:border-blue-300">

            <div class="flex space-x-2">
                <button wire:click="sortBy('name')"
                        class="px-4 py-2 text-white bg-gray-600 rounded hover:bg-gray-700 focus:outline-none">
                    {{ __('Nom') }} <span>{{ $sortDirection === 'ASC' ? '↑' : '↓' }}</span>
                </button>

                <button wire:click="sortBy('music_count')"
                        class="px-4 py-2 text-white bg-gray-600 rounded hover:bg-gray-700 focus:outline-none">
                        {{ __('Musique') }} <span>{{ $sortDirection === 'ASC' ? '↑' : '↓' }}</span>
                </button>
            </div>
        </div>



    <div class="grid grid-cols-5 gap-4">
        @foreach ($playlists as $playlist)
            <div class="bg-gray-700 p-2 rounded-lg shadow flex flex-col items-center">
                <img src="{{ $playlist->thumbnail_url }}" alt="Playlist Image" class="rounded-lg w-full">
                <div class="text-white p-2 text-center">
                    {{ $playlist->name }}
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $playlists->links() }}
    </div>
</div>
