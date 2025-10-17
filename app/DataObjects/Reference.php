<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class Reference
{

    // construct function
    public function __construct(
        public string $name = '',
        public string $reference = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            reference: $data['reference'] ?? '',
        );
    }
}
