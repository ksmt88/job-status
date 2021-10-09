<?php

namespace Job\Usecase;

use Illuminate\Support\Facades\Log;
use Job\Domain\Model\ParentId;
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
                $jobs->countCloseJobs(),
                $jobs->countOpenJobs(),
                $jobs->countSuspendJobs(),
            );

        } catch (\Exception $e) {
            Log::alert($e->getMessage());
            return null;
        }
    }
}
