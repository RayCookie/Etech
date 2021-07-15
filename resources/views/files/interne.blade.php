@extends("layouts.master")

@section("content")
    @if ($files->count())
        
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Cas Internes</h4>
                    
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
                                <th class="datatable-nosort">Etat d'avancement</th>
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
                                    @if ($file->downloaded == 0)
                                    <span class="badge badge-pill badge-warning">En attente...</span>
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

        
    @else
        @include("files.partials.file.no-files")
    @endif
@endsection