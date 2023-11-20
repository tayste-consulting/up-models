<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Util\Response;

use Tayste\Up\Model\Util\Base\Meta;

final readonly class Ping
{
    public function __construct(
        public Meta $meta,
    ) {
    }
}
