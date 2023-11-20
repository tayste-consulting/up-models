<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Tags\Base;

final readonly class TagResource
{
    /**
     * @var string The type of this resource: `tags`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The label of the tag, which also acts as the tag’s unique identifier.
         */
        public string $id,
        public Relationships $relationships,
    ) {
        $this->type = 'tags';
    }
}
