<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Response;

use Tayste\Up\Model\Categories\Base\CategoryResource;

final readonly class ListCategories
{
    /**
     * @param array<array-key, CategoryResource> $data
     */
    public function __construct(
        /**
         * @var array The list of categories returned in this response.
         */
        public array $data,
    ) {
    }

    public function addData(CategoryResource $categoryResource): void
    {
        array_push($this->data, $categoryResource);
    }
}
