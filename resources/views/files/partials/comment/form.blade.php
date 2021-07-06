<form action="/comments" method="post" class="comment-form">
    {{ csrf_field() }}
    <div class="form-group">
        <textarea class="form-control comment-content" rows="3" name="content" placeholder="Note..."></textarea>
        <input type="hidden" name="file_id" class="comment-file_id" value="{{ $file->id }}">
        <div class="invalid-feedback comment-content-error"></div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Ajouter une note</button>
    </div>
</form>