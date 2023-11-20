<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

use Tayste\Up\Model\Base\Links;

final readonly class Transactions
{
    public function __construct(
        public ?Links $links = null,
    ) {
    }
}
