@extends("layouts.master")

@section("content")
    @if ($files->count())
        
   
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Cas clinique</h4>
                    
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th>Utilisateur</th>
                                <th>Fichier</th>
                                <th>Spécialité</th>
                                <th>Note</th>
                                <th class="datatable-nosort">Mis en ligne</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $file)
                            <tr>
                                <td class="table-plus"><a href="/users/{{ $file->user_id }}" class="show-profile-link"><b>{{ !empty($file->user) ? $file->user->username:'Annonyme' }}</b></a></td>
                                <td>{{ $file->original_name }}</td>
                                <td>{{ $file->specialite }}</td>
                                <td>{{ $file->note }}</td>
                                <td>{{ $file->created_at->diffForHumans() }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="/files/{{ $file->id }}" ><i class="dw dw-eye"></i> Consulter</a>
                                            <a class="dropdown-item" href="/download/{{ $file->id }}/{{ $file->original_name }}"><i class="dw dw-download"></i> Prendre en charge</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        
        
    @else
        @include("files.partials.file.no-files")
    @endif
@endsection
