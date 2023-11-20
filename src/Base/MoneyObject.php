<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Base;

final readonly class MoneyObject
{
    public function __construct(
        /**
         * @var string The ISO 4217 currency code.
         */
        public string $currencyCode,

        /**
         * @var string The amount of money, formatted as a string in the relevant currency. For example, for an Australian dollar value of $10.56, this field will be `"10.56"`. The currency symbol is not included in the string.
         */
        public string $value,

        /**
         * @var int The amount of money in the smallest denomination for the currency, as a 64-bit integer. For example, for an Australian dollar value of $10.56, this field will be `1056`.
         */
        public int $valueInBaseUnits,
    ) {
    }
}
