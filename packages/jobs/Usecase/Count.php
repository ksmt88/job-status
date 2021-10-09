<?php

namespace Job\Usecase;

class Count
{
    public int $close;
    public int $open;
    public int $suspend;

    public function __construct(
        int $close,
        int $open,
        int $suspend
    )
    {
        $this->close   = $close;
        $this->open    = $open;
        $this->suspend = $suspend;
    }
}
