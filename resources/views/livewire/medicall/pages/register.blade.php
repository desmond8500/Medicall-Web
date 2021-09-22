<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-4">
            <form wire:submit.prevent="register" method="POST" action="#">
                <div class="row">
                    <div class="col-md-4 offset-4 mt-4">
                        <h3 class="text-center">Inscription</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text" class="form-control" wire:model.defer="prenom">
                            @error('prenom') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" class="form-control" wire:model.defer="nom">
                            @error('nom') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" wire:model.defer="tel">
                            @error('tel') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" wire:model.defer="email" >
                            @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" wire:model.defer="pass1" >
                            @error('pass1') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Confirmer le mot de passe</label>
                            <input type="password" class="form-control" wire:model.defer="pass2" >
                            @error('pass2') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Role</label>
                            <select wire:model="role" class="form-control">
                                    <option value="user">Patient</option>
                                    <option value="medic">Personnel Medical</option>
                            </select>
                        </div>
                    </div>
                    @if ($pass_message)
                        <div class="col-md-12 text-danger text-center">
                            {{ $pass_message }}
                        </div>

                    @endif

                </div>
                <button class="btn btn-primary" type="submit">Valider</button>
                <hr>
                <a href="{{ route('login')}} ">Déjà incrit ?</a>
            </form>
        </div>

        <div class="col-md-12 text-center">
            Veuillez à bien choisir le role, patient ou personnel médical.
        </div>
    </div>
</div>
