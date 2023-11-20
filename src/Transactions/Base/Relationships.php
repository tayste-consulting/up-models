<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

final readonly class Relationships
{
    public function __construct(
        public Account $account,

        /**
         * @var TransferAccount If this transaction is a transfer between accounts, this relationship will contain the account the transaction went to/came from. The `amount` field can be used to determine the direction of the transfer.
         */
        public TransferAccount $transferAccount,
        public Category $category,
        public ParentCategory $parentCategory,
        public Tags $tags
    ) {
    }
}
