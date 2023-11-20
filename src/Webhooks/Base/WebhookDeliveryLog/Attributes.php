<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

use DateTimeInterface;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var Request Information about the request that was sent to the webhook URL.
         */
        public Request $request,

        /**
         * @var WebhookDeliveryStatusEnum The success or failure status of this delivery attempt.
         */
        public WebhookDeliveryStatusEnum $deliveryStatus,

        /**
         * @var DateTimeInterface The date-time at which this log entry was created.
         */
        public DateTimeInterface $createdAt,

        /**
         * @var Response|null Information about the response that was received from the webhook URL.
         */
        public ?Response $response = null,
    ) {
    }
}
