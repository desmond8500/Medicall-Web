<div>
    <div class="row justify-content-center">
        <div class="col-6">
            <h1 class="page-title">{{ ucfirst($title) ?? 'Titre' }}</h1>
        </div>
        <div class="col-md-6">
            {{ $slot }}
        </div>
    </div>
</div>
