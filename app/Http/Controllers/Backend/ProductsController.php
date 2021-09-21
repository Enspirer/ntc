<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryAttachement;


class ProductsController extends Controller
{
   
    public function index()
    {
        return view('backend.products.index');
    }

}
