<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryAttachement;
use App\Models\Products;


class ProductsController extends Controller
{
   
    public function index()
    {
        return view('backend.products.index');
    }

    public function create()
    {
      
        $categories = Category::where('status','=','Enabled')->get();

        return view('backend.products.create',[
            'categories' => $categories 
        ]);
    }

    public function findSubcatWithCatID($id)
    {
        // dd($id);
        $sub_cat_attachment = SubCategoryAttachement::where('category_id',$id)->get();


        $output_array = [];

        foreach($sub_cat_attachment as $key => $sub_cat){

            $sub_cat_details = SubCategory::where('id',$sub_cat->sub_category_id)->first();

            $array_out = [
                'category_id' => $sub_cat->category_id,
                'sub_category_id' => $sub_cat->sub_category_id,
                'sub_category_name' => $sub_cat_details->name
            ];

            array_push($output_array,$array_out);
        }

        // dd($output_array);

        return response()->json($output_array);
    }

    public function getdetails(Request $request)
    {
        if($request->ajax())
        {
            $data = Products::get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                       
                        $button = '<a href="'.route('admin.products.edit',$data->id).'" name="edit" id="'.$data->id.'" class="edit btn btn-secondary btn-sm ml-3 mr-3"><i class="fas fa-edit"></i> Edit </a>';
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

        if($request->image1 == null){
            return back()->withErrors('Please Select Feature Image');
        }else{

            if($request->image2 == null){
                return back()->withErrors('Please Select an Image 2');
            }else{
                if($request->image3 == null){
                    return back()->withErrors('Please Select an Image 3');
                }else{

        
                    $json_images_one = ['image1' => $request->image1];
                    $json_images_two = ['image2' => $request->image2];
                    $json_images_three = ['image3' => $request->image3];

                    $json_images = [
                        $json_images_one,$json_images_two,$json_images_three
                    ];

                    
                    $attribute_name = $request->attribute_name;
                    $attribute_value = $request->attribute_value;
                    // dd($attribute_value);

                    $final_array = [];
                    
                    foreach($attribute_name as $key => $name){

                        $item_group = [
                            
                            'name' => $name,
                            'value' => $attribute_value[$key],
                        ];

                        array_push($final_array,$item_group);
                    }
                    // dd($final_array);

                    $add = new Products;

                    $add->product_name=$request->product_name; 

                    if($request->model_number == null){
                        $add->model_number='No Model Number';
                    }else{
                        $add->model_number=$request->model_number;
                    }
                            
                    $add->description=$request->description;
                    $add->status=$request->status;
                    $add->category=$request->category;
                    $add->sub_category=$request->sub_category;

                    $add->multiple_images=json_encode($json_images);
                    $add->attributes=json_encode($final_array);

                    $add->save();

                    return redirect()->route('admin.products.index')->withFlashSuccess('Added Successfully');  
                }
            }
        }
    }

    public function edit($id)
    {
        $products = Products::where('id',$id)->first(); 

        $categories = Category::where('status','=','Enabled')->get();

        return view('backend.products.edit',[
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function update(Request $request)
    {        
        // dd($request);

        if($request->image1 == null){
            return back()->withErrors('Please Select Feature Image');
        }else{

            if($request->image2 == null){
                return back()->withErrors('Please Select an Image 2');
            }else{
                if($request->image3 == null){
                    return back()->withErrors('Please Select an Image 3');
                }else{

        
                    $json_images_one = ['image1' => $request->image1];
                    $json_images_two = ['image2' => $request->image2];
                    $json_images_three = ['image3' => $request->image3];

                    $json_images = [
                        $json_images_one,$json_images_two,$json_images_three
                    ];

                    
                    $attribute_name = $request->attribute_name;
                    $attribute_value = $request->attribute_value;
                    // dd($attribute_name);

                    
                        $final_array = [];
                    
                        foreach($attribute_name as $key => $name){
                
                            $item_group = [
                                
                                'name' => $name,
                                'value' => $attribute_value[$key],
                            ];
                
                            array_push($final_array,$item_group);
                        }
                        // dd($final_array);
                            

                    $update = new Products;

                    $update->product_name=$request->product_name;      
                    
                    if($request->model_number == null){
                        $update->model_number='No Model Number';
                    }else{
                        $update->model_number=$request->model_number;
                    }

                    $update->description=$request->description;
                    $update->status=$request->status;
                    $update->category=$request->category;

                    if($request->sub_category == null){
                        $sub_category = Products::where('id',$request->hidden_id)->first()->sub_category;
                        $update->sub_category = $sub_category;
                    }else{
                        $update->sub_category=$request->sub_category;
                    }  
                    

                    $update->multiple_images=json_encode($json_images);
                    $update->attributes=json_encode($final_array);
                    

                    Products::whereId($request->hidden_id)->update($update->toArray());

                    return redirect()->route('admin.products.index')->withFlashSuccess('Updated Successfully'); 
                }
            }
        }
         
    }

    public function destroy($id)
    {        
        $data = Products::findOrFail($id);
        $data->delete();   
    }



}
