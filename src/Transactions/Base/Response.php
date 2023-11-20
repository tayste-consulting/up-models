<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

final readonly class Response
{
    public function __construct(
        public TransactionResource $data,
    ) {
    }
}
