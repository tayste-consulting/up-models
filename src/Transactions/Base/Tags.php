<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Transactions\Base;

use Tayste\Up\Model\Base\Links;

final readonly class Tags
{
    /**
     * @param array<array-key, Data> $data
     * @param Links|null $links
     */
    public function __construct(
        public array $data,
        public ?Links $links = null,
    ) {
    }

    public function addData(Data $data): void
    {
        array_push($this->data, $data);
    }
}
