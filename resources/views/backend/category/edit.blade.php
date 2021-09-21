@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    <form action="{{route('admin.category.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Name <span style="color:red">*<span></label>
                            <textarea type="text" class="form-control" name="name" rows="3" required> {{ $categories->name }} </textarea>
                        </div>                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" class="form-control" name="description" rows="2"> {{ $categories->description }} </textarea>
                        </div> 
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                            <br>
                            <img src="{{url('files/category',$categories->image)}}" style="width: 18%;" alt="" >
                        </div>
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="file" class="form-control" name="icon">
                            <br>
                            <img src="{{url('files/category',$categories->icon)}}" style="width: 18%;" alt="" >
                        </div>
                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $categories->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $categories->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="text" class="form-control" name="order" value="{{ $categories->order }}" required>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $categories->id }}"/>
                <a href="{{route('admin.category.index')}}" class="btn btn-primary pull-right ml-4">Back</a>&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>


<br><br>
@endsection
