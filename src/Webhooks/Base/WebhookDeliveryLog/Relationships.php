<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class Relationships
{
    public function __construct(
        public WebhookEvent $webhookEvent,
    ) {
    }
}
