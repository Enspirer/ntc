@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')


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
                            <input type="text" class="form-control" name="model_number" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="6" required></textarea>
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
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Create New Product</button><br>
            </div><br>
            
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                            
                            <div class="form-group">
                                <label>Product Images</label>
                                <input type="file" class="form-control" name="image1" required>
                                <input type="file" class="form-control mt-3" name="image2" required>
                                <input type="file" class="form-control mt-3" name="image3" required>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                                                      
                            <div class="form-group">
                                <label>Attributes</label>
                                <div class="table-responsive">                                
                                    <table class="table table-bordered table-striped" id="user_table">
                                        
                                        <tbody>
                                        </tbody>
                                        
                                    </table>                                
                                </div>
                            </div>                           
                            
                        </div>
                    </div>
                </div>
                

            </div><br>

        </div>

    </form>



<script>
$(document).ready(function(){

    var count = 1;

    dynamic_field(count);

    function dynamic_field(number)
    {
    html = '<tr>';
            html += '<td width="90%"><input type="text" class="form-control" name="attribute_name[]" class="mb-2" placeholder="Attribute Name" required/><input type="text" class="form-control" name="attribute_value[]" class="mb-2" placeholder="Value" required/></td>';
        
            if(number > 1)
            {
                html += '<td><button type="button" name="remove" id="" class="btn btn-warning remove mt-3"><i class="fas fa-minus"></i></button></td></tr>';
                $('tbody').append(html);
            }
            else
            {   
                html += '<td><button type="button" name="add" id="add" class="btn btn-success mt-3"><i class="fas fa-plus"></i></button></td></tr>';
                $('tbody').html(html);
            }
    }

    $(document).on('click', '#add', function(){
    count++;
    dynamic_field(count);
    });

    $(document).on('click', '.remove', function(){
    count--;
    $(this).closest("tr").remove();
    });


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
