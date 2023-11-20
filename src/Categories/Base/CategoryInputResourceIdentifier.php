<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

final readonly class CategoryInputResourceIdentifier
{
    /**
     * @var string The type of this resource: `categories`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier of the category, as returned by the `/categories` endpoint.
         */
        public string $id
    ) {
        $this->type = 'categories';
    }
}
