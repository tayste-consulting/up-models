<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookDeliveryLog;

enum WebhookDeliveryStatusEnum: string
{
    case Delivered = 'DELIVERED';
    case Undeliverable = 'UNDELIVERABLE';
    case BadResponseCode = 'BAD_RESPONSE_CODE';
}
