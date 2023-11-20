<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

use DateTimeInterface;
use Tayste\Up\Model\Base\MoneyObject;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var string The name associated with the account in the Up application.
         */
        public string            $displayName,

        /**
         * @var AccountTypeEnum The bank account type of this account.
         */
        public AccountTypeEnum   $accountType,

        /**
         * @var OwnershipTypeEnum The ownership structure for this account.
         */
        public OwnershipTypeEnum $ownershipType,

        /**
         * @var MoneyObject The available balance of the account, taking into account any amounts that are currently on hold.
         */
        public MoneyObject       $balance,

        /**
         * @var DateTimeInterface The date-time at which this account was first opened.
         */
        public DateTimeInterface $createdAt,
    ) {
    }
}
