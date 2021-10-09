<?php

namespace Common\Domain\ValueObjects;


abstract class IntValueObject
{
    private int $value;

    protected function __construct(int $value)
    {
        if (!isset($value) || !is_numeric($value)) {
            throw new \InvalidArgumentException("need any value");
        }
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function equals(IntValueObject $arg): bool
    {
        return $this->value === $arg->value;
    }
}
