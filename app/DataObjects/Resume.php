<?php

declare(strict_types=1);

namespace App\DataObjects;

readonly class Resume
{

    // construct function
    public function __construct(
        public Basics $basics = new Basics(),
        /** @var WorkEntry[] */
        public array $work = [],
        /** @var VolunteerEntry[] */
        public array $volunteer = [],
        /** @var EducationEntry[] */
        public array $education = [],
        /** @var Award[] */
        public array $awards = [],
        /** @var Certificate[] */
        public array $certificates = [],
        /** @var Publication[] */
        public array $publications = [],
        /** @var Skill[] */
        public array $skills = [],
        /** @var Language[] */
        public array $languages = [],
        /** @var Interest[] */
        public array $interests = [],
        /** @var Reference[] */
        public array $references = [],
        /** @var Project[] */
        public array $projects = [],
    ) {}


    // static fromArray() function
    public static function fromArray(array $data): self
    {
        $work = [];
        foreach (($data['work'] ?? []) as $item) {
            $work[] = WorkEntry::fromArray($item);
        }

        $volunteer = [];
        foreach (($data['volunteer'] ?? []) as $item) {
            $volunteer[] = VolunteerEntry::fromArray($item);
        }

        $education = [];
        foreach (($data['education'] ?? []) as $item) {
            $education[] = EducationEntry::fromArray($item);
        }

        $awards = [];
        foreach (($data['awards'] ?? []) as $item) {
            $awards[] = Award::fromArray($item);
        }

        $certificates = [];
        foreach (($data['certificates'] ?? []) as $item) {
            $certificates[] = Certificate::fromArray($item);
        }

        $publications = [];
        foreach (($data['publications'] ?? []) as $item) {
            $publications[] = Publication::fromArray($item);
        }

        $skills = [];
        foreach (($data['skills'] ?? []) as $item) {
            $skills[] = Skill::fromArray($item);
        }

        $languages = [];
        foreach (($data['languages'] ?? []) as $item) {
            $languages[] = Language::fromArray($item);
        }

        $interests = [];
        foreach (($data['interests'] ?? []) as $item) {
            $interests[] = Interest::fromArray($item);
        }

        $references = [];
        foreach (($data['references'] ?? []) as $item) {
            $references[] = Reference::fromArray($item);
        }

        $projects = [];
        foreach (($data['projects'] ?? []) as $item) {
            $projects[] = Project::fromArray($item);
        }

        return new self(
            basics: isset($data['basics']) ? Basics::fromArray($data['basics']) : new Basics(),
            work: $work,
            volunteer: $volunteer,
            education: $education,
            awards: $awards,
            certificates: $certificates,
            publications: $publications,
            skills: $skills,
            languages: $languages,
            interests: $interests,
            references: $references,
            projects: $projects,
        );
    }
}
