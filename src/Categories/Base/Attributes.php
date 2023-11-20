<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var string The name of this category as seen in the Up application.
         */
        public string $name,
    ) {
    }
}
