<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Http\Request;
use App\Models\Inquire;
use DB;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryAttachement;
use App\Models\Products;
use Mail;  
use \App\Mail\InquireMail;

/**
 * Class ProductController.
 */
class ProductController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    

    public function category_all_products($id)
    {
        
        $categories = Category::where('status','=','Enabled')->get();

        $products = Products::where('category',$id)->where('status','=','Enabled')->orderBy('id','DESC')->get()->unique('product_name');
        // dd($products);

        $sub_cat_attachment = SubCategoryAttachement::where('category_id',$id)->get();
        // dd($sub_cat_attachment);

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

        return view('frontend.products',[
            'products' => $products,
            'categories' => $categories,
            'category_id' => $id,
            'output_array' => $output_array
        ]);
    }




    public function product_model($id)
    {
        // dd($id);
        
        $categories = Category::where('status','=','Enabled')->get();        
        // dd($categories);

        $product = Products::where('id',$id)->first();

        $cat = Category::where('id',$product->category)->first();

        // dd($cat);

        
        $products = Products::where('product_name',$product->product_name)->where('category',$product->category)->where('status','=','Enabled')->orderBy('id','DESC')->get();
        // dd($products);

        $output_array_model = [];

        foreach($products as $key => $pro_models){

            $array_output = [
                'model_number' => $pro_models->model_number,
                'product_name' => $pro_models->product_name,
                'product_id' => $pro_models->id,
                'description' => $pro_models->description,
                'product_image' => json_decode($pro_models->multiple_images)[0]->image1,
            ];

            array_push($output_array_model,$array_output);
        }
        
            // dd($output_array_model);

            $products_cat = Products::where('id',$id)->first();
            // dd($products_cat);
        
            $sub_cat_attachment = SubCategoryAttachement::where('category_id',$products_cat->category)->get();
            // dd($sub_cat_attachment);
    
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

        return view('frontend.products_model',[
            'categories' => $categories,
            'category_id' => $cat->id,
            'output_array' => $output_array,
            'output_array_model' => $output_array_model
        ]);
    }

    
    public function solo_product($id)
    {
        $categories = Category::where('status','=','Enabled')->get();

        $product = Products::where('id',$id)->first();

        $cat = Category::where('id',$product->category)->first();
        
        $sub_cat_attachment = SubCategoryAttachement::where('category_id',$cat->id)->get();
        // dd($sub_cat_attachment);

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


        return view('frontend.solo_product',[
            'product' => $product,
            'categories' => $categories,
            'category_id' => $cat->id,
            'output_array' => $output_array
        ]);
    }

    public function inquire(Request $request)
    {        
        // dd($request);     
   
        $add = new Inquire;

        $add->first_name=$request->first_name;
        $add->last_name=$request->last_name;
        if(!empty( auth()->user()->id) === true ){
            $add->user_id=auth()->user()->id;
        } 
        $add->product_name=$request->product_name;
        $add->product_id=$request->product_id;
        $add->contact_number=$request->contact_number;
        $add->email=$request->email;
        $add->message=$request->message;
        $add->status='Pending'; 

        $add->save();

        $details = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'product_name' => $request->product_name,
            'product_id' => $request->product_id,
            'contact_number' => $request->contact_number,
            'email' => $request->email,          
            'message' => $request->message,
        ];

        \Mail::to([$request->email,'nihsaan.enspirer@gmail.com'])->send(new InquireMail($details));

       
        session()->flash('message','Thanks!');

        return back();    
    }

}
