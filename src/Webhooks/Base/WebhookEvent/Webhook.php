<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

use Tayste\Up\Model\Base\Links;

final readonly class Webhook
{
    public function __construct(
        public WebhookData $data,
        public ?Links      $links,
    ) {
    }
}
