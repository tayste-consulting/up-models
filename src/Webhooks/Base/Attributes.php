<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base;

use DateTimeInterface;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var DateTimeInterface The date-time at which this webhook was created.
         */
        public DateTimeInterface $createdAt,

        /**
         * @var string|null The URL that this webhook is configured to `POST` events to.
         */
        public ?string $url = null,

        /**
         * @var string|null An optional description that was provided at the time the webhook was created.
         */
        public ?string $description = null,

        /**
         * @var string|null A shared secret key used to sign all webhook events sent to the configured webhook URL. This field is returned only once, upon the initial creation of the webhook. If lost, create a new webhook and delete this webhook.
         *
         * The webhook URL receives a request with a `X-Up-Authenticity-Signature` header, which is the SHA-256 HMAC of the entire raw request body signed using this `secretKey`. It is advised to compute and check this signature to verify the authenticity of requests sent to the webhook URL.
         */
        public ?string $secretKey = null,
    ) {
    }
}
