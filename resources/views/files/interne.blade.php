@extends("layouts.master")

@section("content")
    @if ($files->count())
        <ul class="list-group file-list">
            <li class="list-group-item"><h5 class="text-center">Cas pris en charge</h5></li>
            <div class="card-box mb-30">
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Utilisateur</th>
                                <th>Fichier</th>
                                <th>Mis en ligne</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            <tr>
                                <td class="table-plus"> <a href="/users/{{ $file->user_id }}" class="show-profile-link"><b>{{ !empty($file->user) ? $file->user->username:'Annonyme' }}</b></a></td>
                                
                                
                                <td> {{ $file->original_name }}</td>
                                <td>{{ $file->created_at->diffForHumans() }}</td>
                                <td>
                                   
                                         
                                           @if ($file->downloaded == 1)
                                          <span class="badge badge-pill badge-warning">Pending...</span>
                                           @else
                                           <span class="badge badge-pill badge-success">Pris en charge</span>
                                           @endif

                                        
                                
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