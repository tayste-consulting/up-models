<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

enum CardPurchaseMethodEnum: string
{
    case Barcode = 'BAR_CODE';
    case Ocr = 'OCR';
    case CardPin = 'CARD_PIN';
    case CardDetails = 'CARD_DETAILS';
    case CardOnFile = 'CARD_ON_FILE';
    case Ecommerce = 'ECOMMERCE';
    case MagneticStripe = 'MAGNETIC_STRIPE';
    case Contactless = 'CONTACTLESS';
}
