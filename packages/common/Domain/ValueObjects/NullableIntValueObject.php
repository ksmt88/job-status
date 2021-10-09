<?php


namespace Common\Domain\ValueObjects;


abstract class NullableIntValueObject
{
    private ?int $value;

    public function __construct(?int $value)
    {
        if (!is_null($value) && !is_numeric($value)) {
            throw new \InvalidArgumentException("invalid value");
        }
        $this->value = $value;

    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function equals(NullableIntValueObject $arg): bool
    {
        return $this->value === $arg->getValue();
    }

}
