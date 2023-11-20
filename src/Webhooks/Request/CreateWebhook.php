<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Request;

use Tayste\Up\Model\Webhooks\Base\WebhookInputResource;

final readonly class CreateWebhook
{
    public function __construct(
        /**
         * @var WebhookInputResource The webhook resource to create.
         */
        public WebhookInputResource $data,
    ) {
    }
}
