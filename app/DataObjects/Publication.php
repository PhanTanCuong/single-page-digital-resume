<?php

declare(strict_types=1);

namespace App\DataObjects;

use Carbon\Carbon;

readonly class Publication
{

    // construct function
    public function __construct(
        public string $name = '',
        public string $publisher = '',
        public ?Carbon $releaseDate = null,
        public string $url = '',
        public string $summary = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            publisher: $data['publisher'] ?? '',
            releaseDate: isset($data['releaseDate']) ? Carbon::parse($data['releaseDate']) : null,
            url: $data['url'] ?? '',
            summary: $data['summary'] ?? '',
        );
    }
}
