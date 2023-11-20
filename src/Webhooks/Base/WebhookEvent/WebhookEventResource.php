<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

final readonly class WebhookEventResource
{
    /**
     * @var string The type of this resource: `webhook-events`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this event. This will remain constant across delivery retries.
         */
        public string        $id,
        public Attributes    $attributes,
        public Relationships $relationships,
    ) {
        $this->type = 'webhook-events';
    }
}
