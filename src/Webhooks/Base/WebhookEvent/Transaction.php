<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

use Tayste\Up\Model\Base\Links;

final readonly class Transaction
{
    public function __construct(
        public TransactionData $data,
        public ?Links $links = null
    ) {
    }
}
