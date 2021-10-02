@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">


    <form action="{{route('admin.best_selling.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select Product 1
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                            <div class="col-md-12 mt-2">
                                <select class="form-control" name="prod_1" required>
                                    <option value="" selected disabled>Select...</option>
                                    @foreach($products as $key => $product)
                                        <option value="{{$product->id}}" {{$product->id == $best_selling->prod_1 ? "selected" : "" }}>{{$product->product_name}} - {{$product->model_number}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
            </div><br> 
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select Product 2
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="prod_2" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($products as $key => $product)
                                       <option value="{{$product->id}}" {{$product->id == $best_selling->prod_2 ? "selected" : "" }}>{{$product->product_name}} - {{$product->model_number}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br> 

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select Product 3
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="prod_3" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($products as $key => $product)
                                       <option value="{{$product->id}}" {{$product->id == $best_selling->prod_3 ? "selected" : "" }}>{{$product->product_name}} - {{$product->model_number}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br> 
             
        </div>

        <div class="row">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select Product 4
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="prod_4" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($products as $key => $product)
                                       <option value="{{$product->id}}" {{$product->id == $best_selling->prod_4 ? "selected" : "" }}>{{$product->product_name}} - {{$product->model_number}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br> 
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select Product 5
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="prod_5" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($products as $key => $product)
                                       <option value="{{$product->id}}" {{$product->id == $best_selling->prod_5 ? "selected" : "" }}>{{$product->product_name}} - {{$product->model_number}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br> 
             
        </div>        
        <input type="hidden" name="hidden_id" value="{{$best_selling->id}}" />
        <button type="submit" class="btn btn-success pull-right">Update</button><br>

    </form>


<br><br>
@endsection
