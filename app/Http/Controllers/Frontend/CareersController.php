<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobOpportunity;
use App\Models\Candidate;
use DB;


/**
 * Class CareersController.
 */
class CareersController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jobs = JobOpportunity::orderBy('order', 'ASC')->where('status', '=', 'Enabled')->get();

        return view('frontend.careers',[
            'jobs' => $jobs
        ]);
    }

    public function general_candidate(Request $request)
    {        
        // dd($request);

        if($request->file('cv_upload'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->cv_upload->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->cv_upload->move(public_path('files/cv'), $preview_fileName1);
            $cv_url1 = $preview_fileName1;
        }else{
            $cv_url1 = null;
        } 
        
        $addgjob = new Candidate;

        $addgjob->name=$request->name;
        $addgjob->email=$request->email;
        $addgjob->contact_number=$request->contact_number;
        $addgjob->position='General Position';
        $addgjob->message=$request->message;
        $addgjob->cv=$cv_url1; 

        $addgjob->save();

        session()->flash('message','Thanks!');

        return back();    
    }

    public function job_candidate(Request $request)
    {        
        // dd($request);

        if($request->file('cv_upload'))
        {
            $preview_fileName1 = time().'_'.rand(1000,10000).'.'.$request->cv_upload->getClientOriginalExtension();
            $fullURLsPreviewFile1 = $request->cv_upload->move(public_path('files/cv'), $preview_fileName1);
            $cv_url1 = $preview_fileName1;
        }else{
            $cv_url1 = null;
        } 
        
        $addjjob = new Candidate;

        $addjjob->name=$request->name;
        $addjjob->email=$request->email;
        $addjjob->contact_number=$request->contact_number;
        $addjjob->position=$request->position;
        $addjjob->message=$request->message;
        $addjjob->cv=$cv_url1; 

        $addjjob->save();

        session()->flash('message','Thanks!');

        return back();    
    }


}
