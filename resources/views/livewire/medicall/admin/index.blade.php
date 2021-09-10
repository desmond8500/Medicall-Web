<div>
    @component('components.tiny.header',['title'=>'admin'])

    @endcomponent
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <a class="text-success" href="{{ route('admin.rv') }}">Rendez-vous :</a>
                            <div class="float-right">{{ $rvs }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <a class="text-success" href="{{ route('admin.newsletter') }}">Newsletter :</a>
                            <div class="float-right">{{ $news }}</div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <a class="text-success" href="{{ route('admin.users') }}">Utilisateur :</a>
                            <div class="float-right">{{ $users }}</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

