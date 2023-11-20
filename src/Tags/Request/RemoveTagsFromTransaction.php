<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Tags\Request;

use Tayste\Up\Model\Tags\Base\TagInputResourceIdentifier;

final readonly class RemoveTagsFromTransaction
{
    /**
     * @param array<array-key, TagInputResourceIdentifier> $data
     */
    public function __construct(
        /**
         * @var array<array-key, TagInputResourceIdentifier> The tags to add to or remove from the transaction.
         */
        public array $data,
    ) {
    }

    public function addData(TagInputResourceIdentifier $tagInputResourceIdentifier): void
    {
        array_push($this->data, $tagInputResourceIdentifier);
    }
}
