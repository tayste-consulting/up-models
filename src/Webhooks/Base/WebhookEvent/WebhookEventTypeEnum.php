<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Webhooks\Base\WebhookEvent;

enum WebhookEventTypeEnum: string
{
    case TransactionCreated = 'TRANSACTION_CREATED';
    case TransactionSettled = 'TRANSACTION_SETTLED';
    case TransactionDeleted = 'TRANSACTION_DELETED';
    case Ping = 'PING';
}
