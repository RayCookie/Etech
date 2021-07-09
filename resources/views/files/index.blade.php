@extends("layouts.master")

@section("content")
    @if ($files->count())
        <ul class="list-group file-list">
            <li class="list-group-item"><h5 class="text-center">Cas cliniques</h5></li>
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
                                    
                                        
                                        
                                            <a class="dropdown-item" href="/files/{{ $file->id }}" ><i class="dw dw-eye"></i> Consulter</a>
                                            <a class="dropdown-item" href="/download/{{ $file->id }}/{{ $file->original_name }}"><i class="dw dw-download"></i> Prendre en charge</a>
                                            
                                        
                                   
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
