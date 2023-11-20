<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

final readonly class Data
{
    /**
     * @var string The type of this resource: `categories`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier of the resource within its type.
         */
        public string $id,
    ) {
        $this->type = 'categories';
    }
}
