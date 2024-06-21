<?php

namespace App\DataObjects\Spotify;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\DataCollectionOf;

/**
 * The Spotify Track Representation
 */
class TrackDTO extends Data
{
    public function __construct(
        #[MapInputName('track.id')]
        public readonly string $spotify_id,

        #[MapInputName('track.name')]
        public readonly string $name,

        #[MapInputName('track.artists')]
        #[DataCollectionOf(ArtistDTO::class)]
        public readonly array $artists,

        #[MapInputName('track.duration_ms')]
        public readonly int $duration_ms
    ) {}
}
