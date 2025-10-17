<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class Basics
{

    // construct function
    public function __construct(
        public string $name = '',
        public string $label = '',
        public string $image = '',
        public string $email = '',
        public string $phone = '',
        public string $url = '',
        public string $summary = '',
        public Location $location = new Location(),
        /** @var SocialProfile[] */
        public array $profiles = [],
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        $profiles = [];
        foreach (($data['profiles'] ?? []) as $profileData) {
            $profiles[] = SocialProfile::fromArray($profileData);
        }

        return new self(
            name: $data['name'] ?? '',
            label: $data['label'] ?? '',
            image: $data['image'] ?? '',
            email: $data['email'] ?? '',
            phone: $data['phone'] ?? '',
            url: $data['url'] ?? '',
            summary: $data['summary'] ?? '',
            location: isset($data['location']) ? Location::fromArray($data['location']) : new Location(),
            profiles: $profiles,
        );
    }
}
