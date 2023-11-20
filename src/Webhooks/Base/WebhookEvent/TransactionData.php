<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

final readonly class TransactionData
{
    /**
     * @var string The type of this resource: `transactions`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier of the resource within its type.
         */
        public string $id,
    ) {
        $this->type = 'transactions';
    }
}
