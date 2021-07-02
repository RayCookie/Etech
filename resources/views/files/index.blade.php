@extends("layouts.master")

@section("content")
    @if ($files->count())
        <ul class="list-group file-list">
            <li class="list-group-item"><h5 class="text-center">Recently uploaded files</h5></li>
            <div class="card-box mb-30">
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">User</th>
                               
                                <th>File Name</th>
                                <th>Uploaded</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            <tr>
                                <td class="table-plus"> <a href="/users/{{ $file->user_id }}" class="show-profile-link"><b></b></a></td>
                                
                                <td> {{ $file->original_name }}</td>
                                <td>{{ $file->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                           
                                        </a>
                                        
                                            <a class="dropdown-item" href="/files/{{ $file->id }}" ><i class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="/download/{{ $file->id }}/{{ $file->original_name }}"><i class="dw dw-download"></i> Download</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </ul>
        <div class="d-flex justify-content-center">
            {{ $files->links() }}
        </div>
    @else
        @include("files.partials.file.no-files")
    @endif
@endsection
