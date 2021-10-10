<?php

namespace Job\Usecase;

use Illuminate\Support\Facades\Log;
use Job\Domain\Model\ParentId;
use Job\Domain\Model\Status;
use Job\Domain\Repository\JobRepository;

class CountJobs
{
    private JobRepository $jobRepository;

    public function __construct(JobRepository $jobRepository)
    {
        $this->jobRepository = $jobRepository;
    }

    public function execute(int $parentId): ?Count
    {
        if (empty($parentId)) {
            return null;
        }

        try {
            $jobs = $this->jobRepository->findByParentId(new ParentId($parentId));

            return new Count(
                $jobs->countJobs(new Status(Status::CLOSE)),
                $jobs->countJobs(new Status(Status::OPEN)),
                $jobs->countJobs(new Status(Status::SUSPEND)),
            );

        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            return null;
        }
    }
}
