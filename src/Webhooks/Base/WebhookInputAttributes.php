<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

final readonly class WebhookInputAttributes
{
    public function __construct(
        /**
         * @var string The URL that this webhook should post events to. This must be a valid HTTP or HTTPS URL that does not exceed 300 characters in length.
         */
        public string $url,

        /**
         * @var string|null An optional description for this webhook, up to 64 characters in length.
         */
        public ?string $description = null,
    ) {
    }
}
