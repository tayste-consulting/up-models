<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Tags\Base;

final readonly class TagInputResourceIdentifier
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
    ) {
        $this->type = 'tags';
    }
}
