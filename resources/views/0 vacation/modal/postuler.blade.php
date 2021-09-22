<div class="row">
    <div class="col-md-8">
        <img src="{{asset('src/images/img/undraw_hire_te5y.png')}}" alt="" class="img-fluid">
        <h3>Vous êtes prêts à exercer le métier d'infirmier libéral ? Rejoignez nous !!!</h3>
        <p>
            Nous recrutons actuellement des infimiers, des sage-femmes et des kinésithérapeutes. <br>
            L'idée c'est de vous permettre d'exercer votre métier prez de chez vous. Ainsi vous serez utile à votre collectivité tout en trouvant votre compte sur le plan professionnel.
        </p>
        <p>
            <h4>Conditions</h4>
            <ul>
                <li>Etre diplomé</li>
                <li>Etre disponible au moins pendant une partie de la journée</li>
            </ul>
        </p>
    </div>
    <div class="col-md-4">
        <form  method="POST" >
            @csrf
            <div class="form-group">
                <label>Prénom</label>
                <input type="text" class="form-control" wire:model.defer="prenom">
                @error('prenom') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input type="text" class="form-control" wire:model.defer="nom">
                @error('nom') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Téléphone</label>
                <input type="text" class="form-control" wire:model.defer="tel">
                @error('tel') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" wire:model.defer="email">
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" class="form-control" wire:model.defer="pass1">
                @error('pass1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Confirmer le mot de passe</label>
                <input type="password" class="form-control" wire:model.defer="pass2">
                @error('pass2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            @if ($pass_message)
                <div class="col-md-12 text-danger text-center">
                    {{ $pass_message }}
                </div>
            @endif



            <button type="submit" class="btn btn-primary">Envoyer</button>

        </form>
    </div>
</div>
