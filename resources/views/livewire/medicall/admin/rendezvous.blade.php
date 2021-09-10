<div>
    @component('components.tiny.header',['title'=> 'Gestion des rendez-vous'])

    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Rendez-vous</h5>
                </div>
                <div class="table-responsive">
                    <table class="table ">
                        <tr>
                            <th>Nom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th class="text-center">Besoin</th>
                            <th>Description</th>
                            <th class="text-center">Statut</th>
                        </tr>
                        @foreach ($rvs as $rv)
                        <tr>
                            <td>{{ $rv->name }}</td>
                            <td>{{ $rv->tel }}</td>
                            <td>{{ $rv->email }}</td>
                            <td class="text-center">{{ $rv->needs }}</td>
                            <td>{{ $rv->description }}</td>
                            <td class="text-center">
                                @if ($rv->id == $rv_id)
                                    <select wire:model="status" class="form-control">
                                            <option wire:click="update" value="new">Nouveau</option>
                                            <option wire:click="update" value="taken">En cours</option>
                                            <option wire:click="update" value="closed">Terminé</option>
                                    </select>
                                @else
                                    <a class="btn btn-outline-success" wire:click="edit_status('{{ $rv->id }}')">{{ App\Http\Controllers\MedicallController::get_status($rv->status) }}</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
