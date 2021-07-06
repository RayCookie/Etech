@extends ("layouts.master")

@section ("content")
    
    <div class="vertical-center">
        <div class="container">
            <form action="/upload" id="file-upload-form" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <input id="file-input" name="file" type="file">
                    <div class="file-upload-errors"></div>
                    <div class="form-group">
                        <label>specialité</label>
                        <textarea class="form-control" name="specialite" id="specialite"></textarea>
                        <label>note</label>
                        <textarea class="form-control" name="note" id="note"></textarea>
                        
                    </div>
                </div>

                
            </form>
            <div class="filesize-hint">Max file size is 100 MB</div>
            
    </div>
@endsection