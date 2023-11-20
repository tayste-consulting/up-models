<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class WebhookDeliveryLogResource
{
    /**
     * @var string The type of this resource: `webhook-delivery-logs`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this log entry.
         */
        public string $id,
        public Attributes $attributes,
        public Relationships $relationships,
    ) {
        $this->type = 'webhook-delivery-logs';
    }
}
