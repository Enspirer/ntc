@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

<form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="product_name" required>
                        </div>
                        <div class="form-group">
                            <label>Model Number</label>
                            <input type="text" class="form-control" name="model_number" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="6"></textarea>
                        </div>

                                                   
                        <div class="form-group">
                            <label>Category</span></label>
                            <select name="category" class="form-control" id="category" required>
                                <option value="" selected disabled>-- Select Category --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                            
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select name="sub_category" class="form-control" id="sub_category" required>

                            </select>
                        </div>                          
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order</label>
                            <input type="number" class="form-control" name="order" required>
                        </div>
                        
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success pull-right">Create New Product</button><br>
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
                                        <input type="hidden" name="image1" class="selected-files" >
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
                                        <input type="hidden" name="image2" class="selected-files" >
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
                                        <input type="hidden" name="image3" class="selected-files" >
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
                                <label>Group By Name</label>
                                <select class="form-control" name="group_by_name" onchange="yesnoCheck(this);" required>
                                    <option value="" selected disabled>Select...</option> 
                                    <option value="1">Enable</option>   
                                    <option value="0">Disable</option>                                
                                </select>
                            </div>

                            <div class="form-group" id="ifYes" style="display: none;">
                                <label>Feature Image in Product Page</label>
                                <select class="form-control" name="feature_image" required>
                                    <option value="1">Enable</option>   
                                    <option value="0" selected>Disable</option>                                
                                </select>
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
                                        <div class="input-group mb-3">
                                            
                                            <input type="text" name="attribute_name[]" class="form-control m-input" placeholder="Name" autocomplete="off" required>
                                            <input type="text" name="attribute_value[]" class="form-control m-input" placeholder="Value" autocomplete="off" required>
                                            
                                            <div class="input-group-append">                
                                                <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                            </div>
                                        </div>
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

    <script>
        function yesnoCheck(that) {
            if (that.value == 1) {
        // alert("check");
                document.getElementById("ifYes").style.display = "block";
            } else {
                document.getElementById("ifYes").style.display = "none";
            }
        }
    </script> 




<br><br>




@endsection
