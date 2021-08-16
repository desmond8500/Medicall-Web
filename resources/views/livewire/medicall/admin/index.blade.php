<div class="container">
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Newsletter mails</h3>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($news as $new)
                            <li>{{ $new->email }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Rendez-vous</h3>
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
