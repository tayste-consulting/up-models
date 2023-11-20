<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Response;

use Tayste\Up\Model\Base\Links;
use Tayste\Up\Model\Transactions\Base\TransactionResource;

final readonly class ListTransactions
{
    /**
     * @param array<array-key, TransactionResource> $data
     * @param Links $links
     */
    public function __construct(
        /**
         * @var array<array-key, TransactionResource> The list of transactions returned in this response.
         */
        public array $data,
        public Links $links,
    ) {
    }

    public function addData(TransactionResource $transactionResource): void
    {
        array_push($this->data, $transactionResource);
    }
}
