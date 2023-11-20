<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\Links;

final readonly class TransferAccount
{
    public function __construct(
        public ?AccountData $data = null,
        public ?Links $links = null,
    ) {
    }
}
