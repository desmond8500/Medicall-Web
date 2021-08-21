<div>
    <section class="login-wrap login-wrap-2" style="background-image: url('');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <div class="container mb-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="text-center">Connexion</h2>
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <form wire:submit.prevent='login'>
                                    <div class="form-group">
                                        <label for="tel">Email</label>
                                        <input type="email" wire:model.defer="email" class="form-control" required>
                                        @error('email') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Mot de passe</label>
                                        <input type="password" class="form-control" wire:model.defer="password" required>
                                    </div>

                                    <button class="btn btn-primary" type="submit">Valider</button>
                                    <hr>
                                    <a href="{{ route('register')}} ">Créer un compte</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
