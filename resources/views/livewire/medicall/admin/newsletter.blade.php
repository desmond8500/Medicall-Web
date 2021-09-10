<div>
    @component('components.tiny.header',['title'=> 'Gestion de la newsletter'])

    @endcomponent
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Inscrits à la newsletter</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        @foreach ($news as $new)
                        <li class="list-group-item">{{ $new->email }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

