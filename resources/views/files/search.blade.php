@extends ("layouts.master")

@section ("content")
    <ul class="list-group file-list">
        <li class="list-group-item"><h5 class="text-center">Resultats pour "{{ $search }}"</h5></li>
        @each("files.partials.file.list-item", $files, "file")
    </ul>
@endsection