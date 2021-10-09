<?php

namespace App\Http\Controllers;

use Job\Usecase\CountJobs;

class JobController extends Controller
{
    public function index(CountJobs $countJobs)
    {
        return json_encode($countJobs->execute(1));
    }
}
