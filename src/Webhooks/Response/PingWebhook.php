<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Response;

use Tayste\Up\Model\Webhooks\Base\WebhookEvent\WebhookEventResource;

final readonly class PingWebhook
{
    public function __construct(
        /**
         * @var WebhookEventResource The webhook event data sent to the subscribed webhook.
         */
        public WebhookEventResource $data,
    ) {
    }
}
