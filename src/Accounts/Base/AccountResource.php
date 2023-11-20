<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

use Tayste\Up\Model\Base\Links;

final readonly class AccountResource
{
    /**
     * @var string The type of this resource: `accounts`
     */
    public string $type;

    public function __construct(
        /**
         * @var string The unique identifier for this account.
         */
        public string $id,
        public Attributes $attributes,
        public Relationships $relationships,
        public ?Links $links = null,
    ) {
        $this->type = 'accounts';
    }
}
