<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

final readonly class Relationships
{
    public function __construct(
        public Webhook $webhook,
        public ?Transaction $transaction = null,
    ) {
    }
}
