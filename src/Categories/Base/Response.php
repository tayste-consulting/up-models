<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

final readonly class Response
{
    public function __construct(
        public CategoryResource $data,
    ) {
    }
}
