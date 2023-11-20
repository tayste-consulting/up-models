<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

enum TransactionStatusEnum: string
{
    case Held = 'HELD';
    case Settled = 'SETTLED';
}
