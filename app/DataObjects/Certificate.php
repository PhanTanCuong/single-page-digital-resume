<?php

declare(strict_types=1);

namespace App\DataObjects;

use Carbon\Carbon;

readonly class Certificate
{

    // construct function
    public function __construct(
        public string $name = '',
        public ?Carbon $date = null,
        public string $issuer = '',
        public string $url = '',
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            date: isset($data['date']) ? Carbon::parse($data['date']) : null,
            issuer: $data['issuer'] ?? '',
            url: $data['url'] ?? '',
        );
    }
}
