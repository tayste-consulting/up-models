<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

final readonly class Relationships
{
    public function __construct(
        public Transactions $transactions,
    ) {
    }
}
