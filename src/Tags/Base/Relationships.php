<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Tags\Base;

final readonly class Relationships
{
    public function __construct(
        public Transactions $transactions,
    ) {
    }
}
