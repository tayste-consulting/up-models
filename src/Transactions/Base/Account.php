<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\Links;

final readonly class Account
{
    public function __construct(
        public AccountData $data,
        public ?Links $links = null,
    ) {
    }
}
