<?php

declare(strict_types=1);

namespace App\DataObjects;

use Carbon\Carbon;

readonly class Project
{

    // construct function
    public function __construct(
        public string $name = '',
        public ?Carbon $startDate = null,
        public ?Carbon $endDate = null,
        public string $description = '',
        /** @var string[] */
        public array $highlights = [],
        public string $url = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            startDate: isset($data['startDate']) ? Carbon::parse($data['startDate']) : null,
            endDate: isset($data['endDate']) ? Carbon::parse($data['endDate']) : null,
            description: $data['description'] ?? '',
            highlights: array_values($data['highlights'] ?? []),
            url: $data['url'] ?? '',
        );
    }
}
