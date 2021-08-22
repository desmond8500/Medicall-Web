<div class="row">
    <div class="col-md-4 offset-md-4 mt-3">
        <form wire:submit.prevent='login'>
            <div class="form-group">
                <label for="tel">Email</label>
                <input type="email" wire:model.defer="email" class="form-control" required>
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" class="form-control" wire:model.defer="password" required>
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <button class="btn btn-primary" type="submit">Valider</button>

            <hr>
            <a href="{{ route('register')}} ">Créer un compte</a>
        </form>
    </div>
    <div class="col-md-6 offset-md-3 mt-5 text-center">
        Vous pouvez vous connecter aux comptes tests en cliquant sur un de ces roles. <br>
        Validez pour vous connecter.
        <div class="mt-3 d-flex justify-content-between">
            <button wire:click="autologin('user')" class="btn btn-primary">Utilisateur</button>
            <button wire:click="autologin('medic')" class="btn btn-success">Personnel medical</button>
            <button wire:click="autologin('admin')" class="btn btn-danger">Administrateur</button>
        </div>
    </div>
</div>
