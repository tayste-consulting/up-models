<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Response;

use Tayste\Up\Model\Transactions\Base\TransactionResource;

final readonly class RetrieveTransaction
{
    public function __construct(
        /**
         * @var TransactionResource The transaction returned in this response.
         */
        public TransactionResource $data,
    ) {
    }
}
