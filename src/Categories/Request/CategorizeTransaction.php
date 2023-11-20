<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Request;

use Tayste\Up\Model\Categories\Base\CategoryInputResourceIdentifier;

final readonly class CategorizeTransaction
{
    public function __construct(
        /**
         * @var CategoryInputResourceIdentifier|null The category to set on the transaction. Set this entire key to `null` de-categorize a transaction.
         */
        public ?CategoryInputResourceIdentifier $data = null,
    ) {
    }
}
