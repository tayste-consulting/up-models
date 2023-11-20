<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\Links;

final readonly class Category
{
    public function __construct(
        public ?CategoryData $data = null,
        public ?Links $links = null,
    ) {
    }
}
