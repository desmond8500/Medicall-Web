<div class="container">
    <div class="row">
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
    </div>
</div>
