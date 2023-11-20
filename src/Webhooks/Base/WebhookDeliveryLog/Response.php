<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

final readonly class Response
{
    public function __construct(
        /**
         * @var int The HTTP status code received in the response.
         */
        public int $statusCode,

        /**
         * @var string The payload that was received in the response body.
         */
        public string $body,
    ) {
    }
}
