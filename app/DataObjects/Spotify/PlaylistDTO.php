<?php

namespace App\DataObjects\Spotify;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

/**
 * The Spotify Playlist Representation
 */
final class PlaylistDTO extends Data {
    public function __construct(
        #[MapInputName('id')]
        public readonly string $spotify_id,
        public readonly string $name,
        public readonly ?string $description,

        #[MapInputName('images.0.url')]
        public readonly ?string $thumbnail_url,

        #[MapInputName('owner.display_name')]
        public readonly string $owner,

        #[MapInputName('public')]
        public readonly bool $is_public,

        #[MapInputName('collaborative')]
        public readonly bool $is_collaborative
    ) {}
}
