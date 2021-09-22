<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\News;


class NewsController extends Controller
{
    
    public function index()
    {
        return view('backend.news.index');
    }

    public function create()
    {
        return view('backend.news.create');
    }

    public function getDetails(Request $request)
    {
        if($request->ajax())
        {
            $data = News::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.news.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                        return $button;
                    })

                    ->addColumn('status', function($data){
                        if($data->status == 'Enabled'){
                            $status = '<span class="badge badge-success">Enabled</span>';
                        }
                        else{
                            $status = '<span class="badge badge-danger">Disable</span>';
                        }   
                        return $status;
                    })
                    
                    ->rawColumns(['action','status'])
                    ->make(true);
        }
        return back();
    }

    public function store(Request $request)
    {        
        // dd($request);

        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{

            if($request->file('image'))
            {            
                $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
                $fullURLsPreviewFile = $request->image->move(public_path('files/news'), $preview_fileName);
                $image_url = $preview_fileName;
            }else{
                $image_url = null;
            } 

            $add = new News;

            $add->title=$request->title; 
            $add->description=$request->description;        
            $add->feature_image=$image_url;
            $add->user_id = auth()->user()->id;
            $add->order=$request->order;
            $add->status=$request->status;
            $add->save();

            return redirect()->route('admin.news.index')->withFlashSuccess('Added Successfully');  
        }
    }

    public function edit($id)
    {
        $news = News::where('id',$id)->first();         

        return view('backend.news.edit',[
            'news' => $news
        ]);  
    }


    public function update(Request $request)
    {    

        if($request->description == null){
            return back()->withErrors('Please Fill Description Section');
        }else{

            if($request->file('image'))
            {            
                $preview_fileName = time().'_'.rand(1000,10000).'.'.$request->image->getClientOriginalExtension();
                $fullURLsPreviewFile = $request->image->move(public_path('files/news'), $preview_fileName);
                $image_url = $preview_fileName;
            }else{
                $detail = News::where('id',$request->hidden_id)->first();
                $image_url = $detail->feature_image; 
            } 

            $update = new News;

            $update->title=$request->title; 
            $update->description=$request->description;        
            $update->feature_image=$image_url;
            $update->user_id = auth()->user()->id;
            $update->order=$request->order;
            $update->status=$request->status;
            
            News::whereId($request->hidden_id)->update($update->toArray());

            return redirect()->route('admin.news.index')->withFlashSuccess('Updated Successfully');        
        }

        $updatcountry = new News;

        $updatcountry->country_name=$request->country_name; 
        $updatcountry->slug=$request->slug;        
        $updatcountry->currency=$request->currency;
        $updatcountry->currency_rate=$request->currency_rate;
        $updatcountry->country_id=$request->country_id;
        $updatcountry->user_id = auth()->user()->id;

        $updatcountry->country_manager=$user->id;

        $updatcountry->features_flag=$request->features_flag;
        $updatcountry->status=$request->status;
        // $updatcountry->features_manager=$request->features_manager;
   
        News::whereId($request->hidden_id)->update($updatcountry->toArray());

        return redirect()->route('admin.country.index')->withFlashSuccess('Updated Successfully');                      

    }


    public function destroy($id)
    {        
        $data = News::findOrFail($id);
        $data->delete();   
    }


}
