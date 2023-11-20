<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Base;

final readonly class Links
{
    public function __construct(
        /**
         * @var string|null The canonical link to this resource within the API.
         */
        public ?string $self,

        /**
         * @var string|null The link to the previous page in the results. If this value is null there is no previous page.
         */
        public ?string $prev,

        /**
         * @var string|null The link to the next page in the results. If this value is null there is no next page.
         */
        public ?string $next,

        /**
         * @var string|null The link to retrieve the related resource(s) in this relationship.
         */
        public ?string $related,
    ) {
    }
}
