<?php

namespace Job\Domain\Model;

class Job
{
    private JobId    $jobId;
    private Title    $title;
    private ParentId $parentId;
    private Status   $status;

    public function __construct(
        JobId    $jobId,
        Title    $title,
        ParentId $parentId,
        Status   $status
    )
    {
        $this->jobId    = $jobId;
        $this->title    = $title;
        $this->parentId = $parentId;
        $this->status   = $status;
    }

    public function getJobId(): JobId
    {
        return $this->jobId;
    }

    public function getTitle(): Title
    {
        return $this->title;
    }

    public function getParentId(): ParentId
    {
        return $this->parentId;
    }

    public function getStatus(): Status
    {
        return $this->status;
    }
}
