<div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Rendez-vous</h5>
                </div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <tr>
                            <th>Nom</th>
                            <th>Tel</th>
                            <th>Email</th>
                            <th>Besoin</th>
                            <th>Description</th>
                        </tr>
                        @foreach ($rvs as $rv)
                        <tr>
                            <td>{{ $rv->name }}</td>
                            <td>{{ $rv->tel }}</td>
                            <td>{{ $rv->email }}</td>
                            <td>{{ $rv->needs }}</td>
                            <td>{{ $rv->description }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
