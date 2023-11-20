<?php

declare(strict_types=1);

namespace Tayste\Up\Model\Base;

final readonly class Error
{
    /**
     * @param array<array-key, ErrorObject> $errors The list of errors returned in this response.
     */
    public function __construct(
        public array $errors
    ) {
    }

    public function addError(ErrorObject $errorObject): void
    {
        array_push($this->errors, $errorObject);
    }
}
