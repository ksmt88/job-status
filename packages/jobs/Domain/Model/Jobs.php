<?php

namespace Job\Domain\Model;

class Jobs
{
    /**
     * @var Job[]
     */
    private array $jobs;

    public function __construct(
        array $jobs
    )
    {
        $this->jobs = $jobs;
    }

    /**
     * 特定のステータスの求人が何件あるかで対応が変わる場合を想定
     *
     * @param Status $status
     *
     * @return int
     */
    public function countJobs(Status $status): int
    {
        $count = 0;
        foreach ($this->jobs as $job) {
            if ($job->getStatus()->equals($status)) {
                $count++;
            }
        }

        return $count;
    }
}
