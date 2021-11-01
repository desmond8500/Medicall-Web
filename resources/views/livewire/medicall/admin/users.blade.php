<div>
    @component('components.tiny.header',['title'=>'Gestion des Utilisateurs'])

    @endcomponent
    <div class="row">
        <div class="col-md-12 mb-2">
            @include('medicall.admin.users', ['data'=>$users, 'titre'=>'Administrateurs'])
        </div>
        <div class="col-md-12 mb-2">
            @include('medicall.admin.users', ['data'=>$users, 'titre'=>'Personnel'])
        </div>
        <div class="col-md-12 mb-2">
            @include('medicall.admin.users', ['data'=>$users, 'titre'=>'Utilisateurs'])
        </div>



        <div class="col-md-6 mb-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title float-left">Fonctions</h3>
                    <a class="float-right small btn btn-primary text-light" data-toggle="modal" data-target="#fonctionAddModal">Ajouter</a>
                </div>
                <div class="card-body">
                    @if (1)
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th class="text-nowrap">Fonction</th>
                                        <th class="text-nowrap">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fonctions as $key => $fonction)
                                        <tr>
                                            <th>{{ $key+1 }}</th>
                                            <td>{{ $fonction->name }}</td>
                                            <td>{{ $fonction->description }}</td>
                                            {{-- <td>{{ $user->email }}</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else

                    @endif
                </div>

            </div>
        </div>


    </div>

    {{-- Modal add function --}}
    <div class="modal fade" id="fonctionAddModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="defaultModalLabel">Ajouter une fonction</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Nom de la fonction">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea wire:model.defer="description" class="form-control" placeholder="Description" cols="30" rows="3"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn mb-2 btn-primary" data-dismiss="modal" wire:click="store_fonction">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

</div>



