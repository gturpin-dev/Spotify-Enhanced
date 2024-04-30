<?php

namespace App\DataObjects\Spotify;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapName;

/**
 * The Spotify Playlist Representation
 */
final class PlaylistDTO extends Data {
    public function __construct(
        #[MapName('id')]
        public readonly string $spotify_id,
        public readonly string $name,
        public readonly ?string $description,

        #[MapName('images.0.url')]
        public readonly ?string $thumbnail_url,

        #[MapName('owner.display_name')]
        public readonly string $owner,

        #[MapName('public')]
        public readonly bool $is_public,

        #[MapName('collaborative')]
        public readonly bool $is_collaborative
    ) {}
}
