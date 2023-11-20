<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

use Tayste\Up\Model\Base\Links;

final readonly class Logs
{
    public function __construct(
        public ?Links $links = null,
    ) {
    }
}
