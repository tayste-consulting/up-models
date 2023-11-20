<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Response;

use Tayste\Up\Model\Accounts\Base\AccountResource;
use Tayste\Up\Model\Base\Links;

final readonly class ListAccounts
{
    /**
     * @param array<array-key, AccountResource> $data
     * @param Links $links
     */
    public function __construct(
        /**
         * @var array<array-key, AccountResource> The list of accounts returned in this response.
         */
        public array $data,
        public Links $links
    ) {
    }

    public function addData(AccountResource $accountResource): void
    {
        array_push($this->data, $accountResource);
    }
}
