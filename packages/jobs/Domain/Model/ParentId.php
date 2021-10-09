<?php

namespace Job\Domain\Model;

use Common\Domain\ValueObjects\IntValueObject;

class ParentId extends IntValueObject
{
    const NAME = '親ID';

    public function __construct(int $value)
    {
        parent::__construct($value);
    }
}
