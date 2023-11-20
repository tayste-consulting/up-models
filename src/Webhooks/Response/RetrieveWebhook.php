<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Response;

use Tayste\Up\Model\Webhooks\Base\WebhookResource;

final readonly class RetrieveWebhook
{
    public function __construct(
        /**
         * @var WebhookResource The webhook returned in this response.
         */
        public WebhookResource $data,
    ) {
    }
}
