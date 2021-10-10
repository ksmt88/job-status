<?php

namespace Job\Domain\Repository;

use Job\Domain\Model\Jobs;
use Job\Domain\Model\ParentId;

interface JobRepository
{

    public function findByParentId(ParentId $parentId): Jobs;

    public function findLatestJobs(int $n): Jobs;

    public function findFavoriteJobs(int $n): Jobs;

    // findで取得する抽象度として、例えば find(Condition $condition)など条件をそのまま渡すのは大きい
    // 上記くらいが使いやすく、局所すぎないと考える
}
