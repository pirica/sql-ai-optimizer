<?php

namespace Soukicz\SqlAiOptimizer\Result;

readonly class CandidateQuery {
    public function __construct(
        private string $schema,
        private string $digest,
        private string $normalizedQuery,
        private string $impactDescription,
    ) {
    }

    public function getSchema(): string {
        return $this->schema;
    }

    public function getDigest(): string {
        return $this->digest;
    }

    public function getImpactDescription(): string {
        return $this->impactDescription;
    }

    public function getNormalizedQuery(): string {
        return $this->normalizedQuery;
    }
}
