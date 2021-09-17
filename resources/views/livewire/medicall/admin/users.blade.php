<div>
    @component('components.tiny.header',['title'=>'Gestion des Utilisateurs'])

    @endcomponent
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="card-title">Utilisateurs</h3>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th class="text-nowrap">Prénom</th>
                                <th class="text-nowrap">Nom</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Role</th>
                                <th class="text-nowrap">Blog</th>
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
                                    <td>
                                        <a class="btn btn-primary" wire:click="blog('{{ $user->id }}')">Blog</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
