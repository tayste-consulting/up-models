<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

final readonly class Relationships
{
    public function __construct(
        public ParentRelationship $parent,
        public ChildRelationship $children,
    ) {
    }
}
