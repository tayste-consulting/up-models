<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

final readonly class Relationships
{
    public function __construct(
        public ?Logs $logs = null,
    ) {
    }
}
