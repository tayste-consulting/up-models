<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Response;

use Tayste\Up\Model\Categories\Base\CategoryResource;

final readonly class RetrieveCategory
{
    public function __construct(
        /**
         * @var CategoryResource The category returned in this response.
         */
        public CategoryResource $data,
    ) {
    }
}
