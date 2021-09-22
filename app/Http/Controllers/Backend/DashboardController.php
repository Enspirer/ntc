<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobOpportunity;
use App\Models\Candidate;
use App\Models\News;
use App\Models\Inquire;


/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news = News::get()->count();
        $inquire = Inquire::get()->where('status','=','Pending')->count();
        $candidate = Candidate::get()->count();
        $job_opportunity = JobOpportunity::get()->count();
      

        return view('backend.dashboard',[
            'news' => $news,
            'inquire' => $inquire,
            'candidate' => $candidate,
            'job_opportunity' => $job_opportunity
        ]);
    }
}
