<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class WebhookEvent
{
    public function __construct(
        public Data $data,
    ) {
    }
}
