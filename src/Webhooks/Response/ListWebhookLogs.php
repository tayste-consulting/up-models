<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Response;

use Tayste\Up\Model\Base\Links;
use Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog\WebhookDeliveryLogResource;

final readonly class ListWebhookLogs
{
    /**
     * @param array<array-key, WebhookDeliveryLogResource> $data
     * @param Links $links
     */
    public function __construct(
        /**
         * @var array<array-key, WebhookDeliveryLogResource> The list of delivery logs returned in this response.
         */
        public array $data,
        public Links $links,
    ) {
    }

    public function addData(WebhookDeliveryLogResource $webhookDeliveryLogResource): void
    {
        array_push($this->data, $webhookDeliveryLogResource);
    }
}
