<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

final readonly class CardPurchaseMethodObject
{
    public function __construct(
        /**
         * @var CardPurchaseMethodEnum The type of card purchase.
         */
        public CardPurchaseMethodEnum $method,

        /**
         * @var string|null  The last four digits of the card used for the purchase, if applicable.
         */
        public ?string                $cardNumberSuffix = null,
    ) {
    }
}
