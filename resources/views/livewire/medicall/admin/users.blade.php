<div>
    @component('components.tiny.header',['title'=>'Gestion des utilisateurs'])

    @endcomponent
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <b>Utilisateurs</b>
                </div>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th class="text-nowrap">Prénom</th>
                        <th class="text-nowrap">Nom</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                             <tr>
                                 <th>{{ $key+1 }}</th>
                                 <td>{{ $user->prenom }}</td>
                                 <td>{{ $user->nom }}</td>
                                 <td>{{ $user->email }}</td>
                                 <td>
                                     @if ($user_id == $user->id)
                                        <select wire:model.defer="role" class="form-control">
                                            <option wire:click="update_role" value="user">Client</option>
                                            <option wire:click="update_role" value="medic">Personnel</option>
                                            <option wire:click="update_role" value="admin">Administrateur</option>
                                        </select>
                                     @else
                                         <a class="btn btn-outline-dark" wire:click="edit({{ $user->id }})">
                                            {{ App\Http\Controllers\MedicallController::get_role($user->role) }}
                                        </a>
                                     @endif

                                </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
