<div>
    @section('content')

    {{ $data }}

    <section class="login-wrap login-wrap-2" style="background-image: url('');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <div class="container mb-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center">Inscription</h2>
                            </div>
                            <div class="col-md-6 offset-md-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prénom</label>
                                                <input type="text" class="form-control" wire:model="prenom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" wire:model="nom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Téléphone</label>
                                                <input type="text" class="form-control" wire:model="tel">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" wire:model="email" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mot de passe</label>
                                                <input type="password" class="form-control" wire:model="pass1" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirmer le mot de passe</label>
                                                <input type="password" class="form-control" wire:model="pass2" >
                                            </div>
                                        </div>

                                    </div>
                                    <a class="btn btn-primary" wire:click='registering'>Valider</a>
                                    <hr>
                                    <a href="{{ route('login')}} ">Déja incrit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
</div>
