<?php

declare(strict_types=1);

namespace App\DataObjects;

use Carbon\Carbon;

readonly class EducationEntry
{

    // construct function
    public function __construct(
        public string $institution = '',
        public string $url = '',
        public string $area = '',
        public string $studyType = '',
        public ?Carbon $startDate = null,
        public ?Carbon $endDate = null,
        public string $score = '',
        /** @var string[] */
        public array $courses = [],
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        return new self(
            institution: $data['institution'] ?? '',
            url: $data['url'] ?? '',
            area: $data['area'] ?? '',
            studyType: $data['studyType'] ?? '',
            startDate: isset($data['startDate']) ? Carbon::parse($data['startDate']) : null,
            endDate: isset($data['endDate']) ? Carbon::parse($data['endDate']) : null,
            score: $data['score'] ?? '',
            courses: array_values($data['courses'] ?? []),
        );
    }
}
