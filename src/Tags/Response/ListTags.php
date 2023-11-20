<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Tags\Response;

use Tayste\Up\Model\Base\Links;
use Tayste\Up\Model\Tags\Base\TagResource;

final readonly class ListTags
{
    /**
     * @param array<array-key, TagResource> $data
     * @param Links $links
     */
    public function __construct(
        /**
         * @var array The list of tags returned in this response.
         */
        public array $data,
        public Links $links,
    ) {
    }

    public function addData(TagResource $tagResource): void
    {
        array_push($this->data, $tagResource);
    }
}
