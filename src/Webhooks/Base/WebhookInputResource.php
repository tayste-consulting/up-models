<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

final readonly class WebhookInputResource
{
    public function __construct(
        public WebhookInputAttributes $attributes,
    ) {
    }
}
