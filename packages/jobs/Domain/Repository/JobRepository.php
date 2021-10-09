<?php

namespace Job\Domain\Repository;

use Job\Domain\Model\Jobs;
use Job\Domain\Model\ParentId;

interface JobRepository
{

    public function findByParentId(ParentId $parentId): Jobs;
}
