<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

use Tayste\Up\Model\Base\Links;

final readonly class CategoryResource
{
    /**
     * @var string The type of this resource: `categories`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this category. This is a human-readable but URL-safe value.
         */
        public string $id,
        public Attributes $attributes,
        public Relationships $relationships,
        public ?Links $links = null,
    ) {
        $this->type = 'categories';
    }
}
