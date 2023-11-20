<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\Links;

final readonly class TransactionResource
{
    /**
     * @var string The type of this resource: `transactions`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this transaction.
         */
        public string $id,
        public Attributes $attributes,
        public Relationships $relationships,
        public ?Links $links = null,
    ) {
        $this->type = 'transactions';
    }
}
