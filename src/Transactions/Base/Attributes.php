<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use DateTimeInterface;
use Tayste\Up\Model\Base\MoneyObject;

final readonly class Attributes
{
    public function __construct(
        /**
         * @var TransactionStatusEnum The current processing status of this transaction, according to whether or not this transaction has settled or is still held.
         */
        public TransactionStatusEnum $status,

        /**
         * @var string A short description for this transaction. Usually the merchant name for purchases.
         */
        public string                $description,

        /**
         * @var bool Boolean flag set to true on transactions that support the use of categories.
         */
        public bool                  $isCategorizable,

        /**
         * @var MoneyObject The amount of this transaction in Australian dollars. For transactions that were once HELD but are now SETTLED, refer to the holdInfo field for the original amount the transaction was HELD at.
         */
        public MoneyObject           $amount,

        /**
         * @var DateTimeInterface The date-time at which this transaction was first encountered.
         */
        public DateTimeInterface     $createdAt,

        /**
         * @var string|null The original, unprocessed text of the transaction. This is often not a perfect indicator of the actual merchant, but it is useful for reconciliation purposes in some cases.
         */
        public ?string               $rawText = null,

        /**
         * @var string|null Attached message for this transaction, such as a payment message, or a transfer note.
         */
        public ?string               $message = null,

        /**
         * @var HoldInfoObject|null If this transaction is currently in the `HELD` status, or was ever in the `HELD` status, the `amount` and `foreignAmount` of the transaction while `HELD`.
         */
        public ?HoldInfoObject       $holdInfo = null,

        /**
         * @var RoundUpObject|null Details of how this transaction was rounded-up. If no Round Up was applied this field will be `null`.
         */
        public ?RoundUpObject        $roundUp = null,

        /**
         * @var CashbackObject|null If all or part of this transaction was instantly reimbursed in the form of cashback, details of the reimbursement.
         */
        public ?CashbackObject       $cashback = null,

        /**
         * @var MoneyObject|null The foreign currency amount of this transaction. This field will be `null` for domestic transactions. The amount was converted to the AUD amount reflected in the `amount` of this transaction. Refer to the `holdInfo` field for the original `foreignAmount` the transaction was `HELD` at.
         */
        public ?MoneyObject          $foreignAmount = null,

        /**
         * @var CardPurchaseMethodObject|null Information about the card used for this transaction, if applicable.
         */
        public ?CardPurchaseMethodObject $cardPurchaseMethod = null,

        /**
         * @var DateTimeInterface|null The date-time at which this transaction settled. This field will be `null` for transactions that are currently in the `HELD` status.
         */
        public ?DateTimeInterface    $settledAt = null,
    ) {
    }
}
