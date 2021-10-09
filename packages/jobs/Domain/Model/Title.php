<?php

namespace Job\Domain\Model;

use Common\Domain\ValueObjects\StringValueObject;

class Title extends StringValueObject
{
    const NAME = '求人名';

    public function __construct(string $value)
    {
        parent::__construct($value);
    }
}
