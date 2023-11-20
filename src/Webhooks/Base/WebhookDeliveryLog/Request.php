<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class Request
{
    public function __construct(
        /**
         * @var string The payload that was sent in the request body.
         */
        public string $body,
    ) {
    }
}
