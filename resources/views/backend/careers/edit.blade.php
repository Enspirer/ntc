@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')
    
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<div class="row">
        <div class="col">

            <div class="card">   

            <div class="modal-content">
            <!-- <span id="form_result"></span> -->
                <form action="{{route('admin.careers.update')}}" method="post" enctype="multipart/form-data">
                   
                    {{csrf_field()}}
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Job Opportunity</h5>
                        
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Title <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $jobs->title }}" required>
                        </div>
                        
                        <label>Description <span style="color:red">*</span></label>
                        <textarea class="form-control" id="editor" name="description" rows="4"> {{ $jobs->description }} </textarea>
                        <br>

                        <div class="form-group">
                            <label>order <span style="color:red">*</span></label>
                            <input type="number" class="form-control" name="order" value="{{ $jobs->order }}" required>
                        </div>

                        <div class="form-group">
                            <label>Status <span style="color:red">*</span></label>
                            <select class="form-control" name="status" required>        
                                <option value="Enabled" {{ $jobs->status == 'Enabled' ? "selected" : "" }} >Enable</option>   
                                <option value="Disabled" {{ $jobs->status == 'Disabled' ? "selected" : "" }} >Disable</option>                                
                            </select>                            
                        </div>                     
                                                
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" value="{{ $jobs->id }}"/>
                        <input type="submit" class="btn btn-success" name="action_button" value="Update">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


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
