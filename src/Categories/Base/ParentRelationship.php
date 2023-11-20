<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Categories\Base;

use Tayste\Up\Model\Base\Links;

final readonly class ParentRelationship
{
    public function __construct(
        public ?Data  $data,
        public ?Links $links,
    ) {
    }
}
