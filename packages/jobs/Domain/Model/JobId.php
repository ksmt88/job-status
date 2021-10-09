<?php

namespace Job\Domain\Model;

use Common\Domain\ValueObjects\IntValueObject;

class JobId extends IntValueObject
{
    const NAME = '求人ID';

    public function __construct(int $value)
    {
        parent::__construct($value);
    }
}
