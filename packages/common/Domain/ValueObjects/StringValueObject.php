<?php

namespace Common\Domain\ValueObjects;


abstract class StringValueObject
{
    private string $value;

    protected function __construct(string $value)
    {
        if (!isset($value) || trim($value) === "") {
            throw new \InvalidArgumentException("need any value");
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function equals(StringValueObject $arg): bool
    {
        return $this->value === $arg->value;
    }
}
