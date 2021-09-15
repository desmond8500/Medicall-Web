<div>
    @component('components.tiny.header',['title'=>'Profile'])
        {{-- <button class="btn btn-primary float-right" wire:click="edit">Editer</button> --}}
    @endcomponent

    <div class="row ">
        <div class="col-12 col-lg-10 col-xl-8">
            <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Notifications</a>
                    </li>
                </ul>
                <form>
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            @if ($edit_avatar)
                                <div wire:loading class="my-2">
                                    <div class="spinner-border" role="status"></div>
                                </div>
                                <div class="mb-3">
                                    @if ($avatar)
                                        <div class="avatar avatar-xl">
                                            <img class="avatar-img rounded-circle" src="{{ $avatar->temporaryUrl() }}">
                                        </div>
                                    @endif
                                    <label class="form-label">Avatar</label>
                                    <input type="file" wire:model="avatar" class="form-control">
                                </div>
                                <button class="btn btn-primary mb-1" wire:click="update_avatar">Mettre à jour</button>
                                <button class="btn btn-secondary" wire:click="$toggle(edit_pass)">Fermer</button>
                            @else
                                <div class="avatar avatar-xl">
                                    @if ($user->avatar)
                                        <img src="{{ asset("storage/$user->avatar") }}" alt="..." class="avatar-img rounded-circle">
                                    @else
                                        <img src="{{ asset('tiny/assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    @endif
                                </div>
                                <a class="btn btn-primary text-light btn-small" wire:click="$toggle('edit_avatar')">Modifier</a>
                            @endif
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">{{ $user->nom }}, {{ $user->prenom }}</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">{{ $user->fonction }}</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <p class="text-dark">
                                        {{ nl2br($user->description) }}
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="small mb-0 text-dark">{{ $user->adresse }}</p>
                                    <p class="small mb-0 text-dark">{{ $user->tel }}</p>
                                    <p class="small mb-0 text-dark">{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary text-white" wire:click="edit">Modifier les infos personelles</a>
                    <a class="btn btn-primary text-white" wire:click="edit_password">Modifier le mot de passe</a>
                    <hr class="my-4">
                    @if ($info_form)
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstname">Prénom</label>
                                <input type="text" wire:model.defer="prenom" class="form-control" placeholder="Prénom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Nom</label>
                                <input type="text" wire:model.defer="nom" class="form-control" placeholder="Nom">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" wire:model.defer="email" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress5">Adresse</label>
                                <input type="text" class="form-control" wire:model.defer="adresse" placeholder="Adresse">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCompany5">Téléphone</label>
                                <input type="tel" class="form-control" wire:model.defer="tel"  placeholder="Téléphone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress5">Fonction</label>
                                <input type="text" class="form-control" wire:model.defer="fonction" placeholder="Adresse">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress5">Description</label>
                                <textarea wire:model.defer="description" class="form-control" placeholder="Décrivez votre profil ici" cols="30" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button class="btn btn-primary" wire:click="update">Mettre à jour</button>
                                <button class="btn btn-secondary" wire:click="$toggle(edit_form)">Fermer</button>
                            </div>
                        </div>
                    @endif
                    @if ($edit_pass)
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputPassword4">Ancien mot de passe</label>
                                    <input type="password" class="form-control" id="inputPassword5">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword5">Nouveau mot de passe</label>
                                    <input type="password" class="form-control" id="inputPassword5">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword6">Confirmer mot de passe</label>
                                    <input type="password" class="form-control" id="inputPassword6">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="mb-2">Prérequis</p>
                                <p class="small text-muted mb-2"> To create a new password, you have to meet all of the
                                    following requirements: </p>
                                <ul class="small text-muted pl-4 mb-0">
                                    <li> Minimum 8 character </li>
                                    <li>At least one special character</li>
                                    <li>At least one number</li>
                                    <li>Can’t be the same as a previous password </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-primary">Mettre à jour</button>
                        <button class="btn btn-secondary" wire:click="$toggle(edit_pass)">Fermer</button>
                    @endif


                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.col-12 -->
    </div> <!-- .row -->

</div>
