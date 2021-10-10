<?php

namespace Job\Domain\Model;

use Common\Domain\ValueObjects\IntValueObject;

class Status extends IntValueObject
{
    const NAME = '求人ステータス';

    const CLOSE   = 0;
    const OPEN    = 1;
    const SUSPEND = 2;

    const STATUSES = [
        self:: CLOSE   => "非公開",
        self:: OPEN    => "公開中",
        self:: SUSPEND => "一時停止",
    ];

    public function __construct(int $value)
    {
        if (!array_key_exists($value, self::STATUSES)) {
            throw new \InvalidArgumentException(
                sprintf("The %s instance could not be created because the argument is invalid(value: %v)", self::class, $value)
            );
        }

        parent::__construct($value);
    }

    public function toString(): string
    {
        return self::STATUSES[$this->getValue()];
    }

    /**
     * ステータスが一時停止の場合は非公開扱いになる仕様を表現
     *
     * @return bool
     */
    public function isActive(): bool
    {
        if (in_array($this->getStatus()->getValue(), [Status::CLOSE, Status::SUSPEND])) {
            return false;
        }

        return true;
    }
}
