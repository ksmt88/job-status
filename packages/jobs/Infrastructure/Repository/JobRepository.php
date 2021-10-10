<?php

namespace Job\Infrastructure\Repository;

use Job\Domain\Model\Job;
use Job\Domain\Model\JobId;
use Job\Domain\Model\Jobs;
use Job\Domain\Model\ParentId;
use Job\Domain\Model\Status;
use Job\Domain\Model\Title;

class JobRepository implements \Job\Domain\Repository\JobRepository
{

    public function findByParentId(ParentId $parentId): Jobs
    {
        // fetch job data from database.

        // sample
        return new Jobs(
            [
                new Job(
                    new JobId(1),
                    new Title("Sample1"),
                    new ParentId(1),
                    new Status(Status::OPEN)
                ),
                new Job(
                    new JobId(2),
                    new Title("Sample2"),
                    new ParentId(1),
                    new Status(Status::OPEN)
                ),
                new Job(
                    new JobId(3),
                    new Title("Sample3"),
                    new ParentId(1),
                    new Status(Status::OPEN)
                ),
                new Job(
                    new JobId(4),
                    new Title("Sample4"),
                    new ParentId(1),
                    new Status(Status::CLOSE)
                ),
                new Job(
                    new JobId(5),
                    new Title("Sample5"),
                    new ParentId(1),
                    new Status(Status::CLOSE)
                ),
                new Job(
                    new JobId(6),
                    new Title("Sample6"),
                    new ParentId(1),
                    new Status(Status::SUSPEND)
                ),
            ]
        );
    }

    public function findLatestJobs(int $n): Jobs
    {
        // TODO: Implement findLatestJobs() method.
    }

    public function findFavoriteJobs(int $n): Jobs
    {
        // TODO: Implement findFavoriteJobs() method.
    }
}
