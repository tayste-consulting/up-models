<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Base;

final readonly class Source
{
    public function __construct(
        /**
         * @var string|null If this error relates to a query parameter, the name of the parameter.
         */
        public ?string $parameter = null,

        /**
         * @var string|null If this error relates to an attribute in the request body, a rfc-6901 JSON pointer to the attribute.
         */
        public ?string $pointer = null,
    ) {
    }
}
