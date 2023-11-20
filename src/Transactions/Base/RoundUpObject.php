<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\MoneyObject;

final readonly class RoundUpObject
{
    public function __construct(
        /**
         * @var MoneyObject The total amount of this Round Up, including any boosts, represented as a negative value.
         */
        public MoneyObject  $amount,

        /**
         * @var MoneyObject|null The portion of the Round Up `amount` owing to boosted Round Ups, represented as a negative value. If no boost was added to the Round Up this field will be `null`.
         */
        public ?MoneyObject $boostPortion = null,
    ) {
    }
}
