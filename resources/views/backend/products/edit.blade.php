@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

    <form action="{{route('admin.products.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" value="{{ $products->product_name }}" name="product_name" required>
                        </div>
                        <div class="form-group">
                            <label>Model Number</label>
                            <input type="text" class="form-control" value="{{ $products->model_number }}" name="model_number" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="6" required>{{ $products->description }}</textarea>
                        </div>

                                                   
                        <div class="form-group">
                            <label>Category</span></label>
                            <select name="category" class="form-control" id="category">
                                <option value="" selected disabled>-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $products->category == $category->id ? "selected" : "" }}>{{ $category->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                            
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select name="sub_category" class="form-control" id="sub_category">

                            </select>
                        </div>
                            
                     

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $products->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $products->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $products->id }}" />
                <button type="submit" class="btn btn-success pull-right">Update Product</button><br>
            </div><br>
            
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                            
                        <div class="form-group">
                                    <label>Feature Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image1" value="{{ json_decode($products->multiple_images)[0]->image1 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label>Image 2
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image2" value="{{ json_decode($products->multiple_images)[1]->image2 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label>Image 3
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image3" value="{{ json_decode($products->multiple_images)[2]->image3 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                                                      
                            <div class="form-group">
                                <label>Attributes</label>

                                <div id="inputFormRow">
                                    @foreach(json_decode($products->attributes) as $key => $product)
                                        <div class="input-group mb-3">
                                        
                                            <input type="text" name="attribute_name[]" class="form-control m-input" value="{{$product->name}}"  placeholder="Name" autocomplete="off" required>
                                            <input type="text" name="attribute_value[]" class="form-control m-input" value="{{$product->value}}" placeholder="Value" autocomplete="off" required>

                                            <div class="input-group-append">                
                                                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                            </div>
                                        
                                        </div>
                                    @endforeach
                                </div>

                                <div id="newRow"></div>
                                <button id="addRow" type="button" class="btn btn-info">Add Row</button>


                            </div>                           
                            
                        </div>
                    </div>
                </div>
                

            </div><br>

        </div>

    </form>

    <script type="text/javascript">
        
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" name="attribute_name[]" class="form-control m-input" placeholder="Name" autocomplete="off" required><input type="text" name="attribute_value[]" class="form-control m-input" placeholder="Value" autocomplete="off" required>';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
    </script>


    <script>
         $(document).ready(function() {
        $('#category').on('change', function() {
            var CatID = $(this).val();
            // console.log(CatID);

                $.ajax({
                    
                    url: "{{url('/')}}/admin/findSubcatWithCatID/" + CatID,
                    method: "GET",
                    dataType: "json",
                    success:function(data) {
                        // console.log(data);
                    if(data){
                        $('#sub_category').empty();
                        $('#sub_category').focus;
                        $('#sub_category').append('<option value="" selected disabled>-- Select Sub Category --</option>'); 
                        $.each(data, function(key, value){
                            // console.log(value);
                        $('select[name="sub_category"]').append('<option value="'+ value.sub_category_id +'">' + value.sub_category_name+ '</option>');
                        
                    });

                    }else{
                        $('#sub_category').empty();
                    }
                  }
                });
            
        });
    });
    </script>


<br><br>
@endsection
