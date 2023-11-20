<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\MoneyObject;

final readonly class CashbackObject
{
    public function __construct(
        /**
         * @var string A brief description of why this cashback was paid.
         */
        public string      $description,

        /**
         * @var MoneyObject The total amount of cashback paid, represented as a positive value.
         */
        public MoneyObject $amount,
    ) {
    }
}
