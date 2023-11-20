<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Accounts\Base;

enum OwnershipTypeEnum: string
{
    case Individual = 'INDIVIDUAL';
    case Joint = 'JOINT';
}
