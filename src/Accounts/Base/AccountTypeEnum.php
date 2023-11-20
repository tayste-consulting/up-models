<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

enum AccountTypeEnum: string
{
    case Saver = 'SAVER';
    case Transactional = 'TRANSACTIONAL';
    case HomeLoan = 'HOME_LOAN';
}
