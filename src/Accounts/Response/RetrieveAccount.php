<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Response;

use Tayste\Up\Model\Accounts\Base\AccountResource;

final readonly class RetrieveAccount
{
    public function __construct(
        /**
         * @var AccountResource The account returned in this response.
         */
        public AccountResource $data,
    ) {
    }
}
