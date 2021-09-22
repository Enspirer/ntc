@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>


    <form action="{{route('admin.news.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title <span style="color:red">*</span></label>
                            <input type="text" id="slug" value="{{ $news->title }}" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="editor" name="description" rows="4">{!! $news->description !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Feature Image</label>
                            <input type="file" class="form-control"  name="image">
                            <br>
                            <img src="{{url('files/news',$news->feature_image)}}" style="width: 18%;" alt="" >
                        </div>                                               

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $news->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $news->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="number" class="form-control" value="{{ $news->order }}" name="order" required>
                        </div>                       
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $news->id }}"/>
                <a href="{{route('admin.news.index')}}" class="btn btn-info pull-right ml-4">Back</a>&nbsp;&nbsp;
                <button type="submit" class="btn btn-success pull-right">Update</button><br>
            </div><br>
            
            

        </div>

    </form>



<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>


<br><br>
@endsection
