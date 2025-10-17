<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class SocialProfile
{

    // construct function
    public function __construct(
        public string $network = '',
        public string $username = '',
        public string $url = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            network: $data['network'] ?? '',
            username: $data['username'] ?? '',
            url: $data['url'] ?? '',
        );
    }
}
