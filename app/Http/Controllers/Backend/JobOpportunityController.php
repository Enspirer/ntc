<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\JobOpportunity;
use App\Models\Candidate;


class JobOpportunityController extends Controller
{
    public function index()
    {
        return view('backend.careers.index');
    }

    public function store(Request $request)
    {        
        // dd($request);        
        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{
            $addjobopportunity = new JobOpportunity;

            $addjobopportunity->title=$request->title;        
            $addjobopportunity->description=$request->description;
            $addjobopportunity->order=$request->order;
            $addjobopportunity->status=$request->status;

            $addjobopportunity->save();

            return back()->withFlashSuccess('Added Successfully');    
        }
    }

    public function GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = JobOpportunity::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<a href="'.route('admin.careers.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    ->addColumn('status', function($data){
                        if($data->status == 'Enabled'){
                            $status = '<span class="badge badge-success">Enabled</span>';
                        }
                        else{
                            $status = '<span class="badge badge-danger">Disabled</span>';
                        }   
                        return $status;
                    })
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        return back();
    }

    public function edit($id)
    {        
        $jobs = JobOpportunity::where('id',$id)->first();
        // dd($jobs);

        return view('backend.careers.edit',[
            'jobs' => $jobs            
        ]);  
    }

    public function update(Request $request)
    {        
        // dd($request);
        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{
            $updatejobopportunity = new JobOpportunity;

            $updatejobopportunity->title=$request->title;        
            $updatejobopportunity->description=$request->description;
            $updatejobopportunity->order=$request->order;
            $updatejobopportunity->status=$request->status;

            JobOpportunity::whereId($request->hidden_id)->update($updatejobopportunity->toArray());

            return redirect()->route('admin.careers.index')->withFlashSuccess('Updated Successfully');
        }  
    }

    public function destroy($id)
    {
        $data = JobOpportunity::findOrFail($id);
        $data->delete();
    }

    // **************************** Candidate ***************************


    public function candidate_index()
    {
        return view('backend.careers.candidate');
    }


    public function candidate_GetTableDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Candidate::latest()->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm"><i class="fas fa-info-circle"></i> View</button>';
                        $button .= '<a href="'.url('files/cv',$data->cv).'" name="download" id="'.$data->id.'" class="download btn btn-warning btn-sm ml-3" style="margin-right: 10px" target="_blank"><i class="fas fa-download"></i> Download </a>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        return back();
    }

    public function candidate_show($id)
    {
        if(request()->ajax())
        {
            $data = Candidate::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    
    public function delete($id)
    {
        $data = Candidate::findOrFail($id);
        $data->delete();
    }




}
