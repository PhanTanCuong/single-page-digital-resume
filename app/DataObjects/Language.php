<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class Language
{

    // construct function
    public function __construct(
        public string $language = '',
        public string $fluency = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            language: $data['language'] ?? '',
            fluency: $data['fluency'] ?? '',
        );
    }
}
