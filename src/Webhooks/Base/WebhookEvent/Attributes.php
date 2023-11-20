<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

use DateTimeInterface;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var WebhookEventTypeEnum The type of this event. This can be used to determine what action to take in response to the event.
         */
        public WebhookEventTypeEnum $eventType,

        /**
         * @var DateTimeInterface The date-time at which this event was generated.
         */
        public DateTimeInterface $createdAt
    ) {
    }
}
