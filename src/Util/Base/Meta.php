<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Util\Base;

final readonly class Meta
{
    public function __construct(
        /**
         * @var string The unique identifier of the authenticated customer.
         */
        public string $id,

        /**
         * @var string A cute emoji that represents the response status.
         */
        public string $statusEmoji,
    ) {
    }
}
