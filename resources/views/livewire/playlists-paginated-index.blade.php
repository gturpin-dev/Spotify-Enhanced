<div class="min-h-screen">
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
