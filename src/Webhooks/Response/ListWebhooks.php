<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Response;

use Tayste\Up\Model\Base\Links;
use Tayste\Up\Model\Webhooks\Base\WebhookResource;

final readonly class ListWebhooks
{
    /**
     * @param array<array-key, WebhookResource> $data
     * @param Links $links
     */
    public function __construct(
        /**
         * @var array<array-key, WebhookResource> The list of webhooks returned in this response.
         */
        public array $data,
        public Links $links,
    ) {
    }

    public function addData(WebhookResource $webhookResource): void
    {
        array_push($this->data, $webhookResource);
    }
}
