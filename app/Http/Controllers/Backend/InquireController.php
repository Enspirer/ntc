<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Inquire;

class InquireController extends Controller
{

    public function index()
    {
        return view('backend.inquire.index');
    }


    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Inquire::get();
            return DataTables::of($data)
            
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.inquire.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3" style="margin-right: 10px"><i class="fas fa-info-circle"></i> View </a>';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })
                    
                    ->editColumn('status', function($data){
                        if($data->status == 'Pending'){
                            $status = '<span class="badge badge-warning">Pending</span>';
                        }
                        else{
                            $status = '<span class="badge badge-success">Seen</span>';
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
        $inquire = Inquire::where('id',$id)->first();
        
        // dd($contact_us);              
        
        return view('backend.inquire.edit',[
            'inquire' => $inquire         
        ]);  
    }

    public function update(Request $request)
    {    
        // dd($request);     
   
        $update = new Inquire;

        $update->status='Seen';        
        
        Inquire::whereId($request->hidden_id)->update($update->toArray());

        return redirect()->route('admin.inquire.index')->withFlashSuccess('Updated Successfully'); 
                            

    }

    public function destroy($id)
    {        
        $data = Inquire::findOrFail($id);
        $data->delete();   
    }
    

}
