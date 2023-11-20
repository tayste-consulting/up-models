<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class Data
{
    /**
     * @var string The type of this resource: `webhook-events`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier of the resource within its type.
         */
        public string $id,
    ) {
        $this->type = 'webhook-events';
    }
}
