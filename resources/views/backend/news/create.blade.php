@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label>Title <span style="color:red">*</span></label>
                            <input type="text" id="slug" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label>Description <span style="color:red">*</span></label>
                            <textarea class="form-control" id="editor" name="description" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Feature Image <span style="color:red">*<span></label>
                            <input type="file" class="form-control" name="image" required>
                        </div>                                               

                        <div class="form-group">
                            <label>Status <span style="color:red">*<span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span style="color:red">*<span></label>
                            <input type="number" class="form-control" name="order" required>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-success pull-right">Create New</button><br>
            </div><br>       
            
        </div>

    </form>


<br><br>

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


@endsection
