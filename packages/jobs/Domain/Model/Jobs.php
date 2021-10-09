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

    public function countCloseJobs(): int
    {
        $count = 0;
        foreach ($this->jobs as $job) {
            if ($job->getStatus()->equals(new Status(Status::CLOSE))) {
                $count++;
            }
        }

        return $count;
    }

    public function countOpenJobs(): int
    {
        $count = 0;
        foreach ($this->jobs as $job) {
            if ($job->getStatus()->equals(new Status(Status::OPEN))) {
                $count++;
            }
        }

        return $count;
    }

    public function countSuspendJobs(): int
    {
        $count = 0;
        foreach ($this->jobs as $job) {
            if ($job->getStatus()->equals(new Status(Status::SUSPEND))) {
                $count++;
            }
        }

        return $count;
    }
}
