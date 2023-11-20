<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\MoneyObject;

final readonly class HoldInfoObject
{
    public function __construct(
        /**
         * @var MoneyObject The amount of this transaction while in the `HELD` status, in Australian dollars.
         */
        public MoneyObject  $amount,

        /**
         * @var MoneyObject|null The foreign currency amount of this transaction while in the `HELD` status. This field will be `null` for domestic transactions. The amount was converted to the AUD amount reflected in the `amount` field.
         */
        public ?MoneyObject $foreignAmount = null,
    ) {
    }
}
