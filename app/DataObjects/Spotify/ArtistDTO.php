<?php

namespace App\DataObjects\Spotify;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;

/**
 * The Spotify Artist Representation
 */
class ArtistDTO extends Data
{
    public function __construct(
        #[MapInputName('id')]
        public readonly string $spotify_id,

        #[MapInputName('name')]
        public readonly string $name,
    ) {}
}
