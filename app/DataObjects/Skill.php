<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class Skill
{

    // construct function
    public function __construct(
        public string $name = '',
        public string $level = '',
        /** @var string[] */
        public array $keywords = [],
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            level: $data['level'] ?? '',
            keywords: array_values($data['keywords'] ?? []),
        );
    }
}
