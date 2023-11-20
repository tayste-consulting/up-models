<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

use Tayste\Up\Model\Base\Links;

final readonly class WebhookResource
{
    /**
     * @var string The type of this resource: `webhooks`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this webhook.
         */
        public string $id,
        public Attributes $attributes,
        public Relationships $relationships,
        public ?Links $links = null,
    ) {
        $this->type = 'webhooks';
    }
}
