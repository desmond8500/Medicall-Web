<div>
    @component('components.tiny.header',['title'=>'Profile'])
        <button class="btn btn-primary float-right" wire:click="edit">Editer</button>
    @endcomponent

    {{-- <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h3 mb-4 page-title">Profile</h2>
            <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                    <div class="avatar avatar-xl">
                        <img src="{{ asset('tiny\assets\avatars\face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                </div>
                <div class="col">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4 class="mb-1">{{ ucfirst($user->prenom) }} {{ ucfirst($user->nom) }}</h4>
                            <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-7">
                            <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit
                                nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras
                                urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
                        </div>
                        <div class="col">
                            <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                            <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                            <p class="small mb-0 text-muted">(537) 315-1481</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-4">
                    <div class="card mb-4 shadow">
                        <div class="card-body my-n3">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-lg bg-light">
                                        <i class="fe fe-user fe-24 text-primary"></i>
                                    </span>
                                </div> <!-- .col -->
                                <div class="col">
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Personal</h3>
                                    </a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                                </div> <!-- .col -->
                            </div> <!-- .row -->
                        </div> <!-- .card-body -->
                        <div class="card-footer">
                            <a href="" class="d-flex justify-content-between text-muted"><span>Account Settings</span><i
                                    class="fe fe-chevron-right"></i></a>
                        </div> <!-- .card-footer -->
                    </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-md-4">
                    <div class="card mb-4 shadow">
                        <div class="card-body my-n3">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-lg bg-light">
                                        <i class="fe fe-shield fe-24 text-primary"></i>
                                    </span>
                                </div> <!-- .col -->
                                <div class="col">
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Security</h3>
                                    </a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                                </div> <!-- .col -->
                            </div> <!-- .row -->
                        </div> <!-- .card-body -->
                        <div class="card-footer">
                            <a href="" class="d-flex justify-content-between text-muted"><span>Security Settings</span><i
                                    class="fe fe-chevron-right"></i></a>
                        </div> <!-- .card-footer -->
                    </div> <!-- .card -->
                </div> <!-- .col-md-->
                <div class="col-md-4">
                    <div class="card mb-4 shadow">
                        <div class="card-body my-n3">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                                    <span class="circle circle-lg bg-light">
                                        <i class="fe fe-bell fe-24 text-primary"></i>
                                    </span>
                                </div> <!-- .col -->
                                <div class="col">
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Notifications</h3>
                                    </a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                        blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                                </div> <!-- .col -->
                            </div> <!-- .row -->
                        </div> <!-- .card-body -->
                        <div class="card-footer">
                            <a href="" class="d-flex justify-content-between text-muted"><span>Notification
                                    Settings</span><i class="fe fe-chevron-right"></i></a>
                        </div> <!-- .card-footer -->
                    </div> <!-- .card -->
                </div> <!-- .col-md-->
            </div> <!-- .row-->
            <h3>Subscription</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper,
                rutrum metus in, congue lectus.</p>
            <div class="card-deck my-4">
                <div class="card mb-4 shadow">
                    <div class="card-body text-center my-4">
                        <a href="#">
                            <h3 class="h5 mt-4 mb-0">Basic</h3>
                        </a>
                        <p class="text-muted">package</p>
                        <span class="h1 mb-0">$9.9</span>
                        <p class="text-muted">year</p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                        <span class="dot dot-lg bg-success"></span>
                        <span class="text-muted ml-3">Active</span>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card mb-4">
                    <div class="card-body text-center my-4">
                        <a href="#">
                            <h3 class="h5 mt-4 mb-0">Professional</h3>
                        </a>
                        <p class="text-muted">package</p>
                        <span class="h1 mb-0">$16.9</span>
                        <p class="text-muted">year</p>
                        <ul class="list-unstyled">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Eget porttitor lorem</li>
                        </ul>
                        <button type="button" class="btn mb-2 btn-primary btn-lg">Ugrade</button>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
            </div> <!-- .card-group -->
            <h6 class="mb-3">Last payment</h6>
            <table class="table table-borderless table-striped">
                <thead>
                    <tr role="row">
                        <th>ID</th>
                        <th>Purchase Date</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">1331</th>
                        <td>2020-12-26 01:32:21</td>
                        <td>$16.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-warning mr-2"></span>Due</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1156</th>
                        <td>2020-04-21 00:38:38</td>
                        <td>$9.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-danger mr-2"></span>False</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1038</th>
                        <td>2019-06-25 19:13:36</td>
                        <td>$9.9</td>
                        <td>Credit Card </td>
                        <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">1227</th>
                        <td>2021-01-22 13:28:00</td>
                        <td>$9.9</td>
                        <td>Paypal</td>
                        <td><span class="dot dot-lg bg-success mr-2"></span>Paid</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm dropdown-toggle more-vertical" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted sr-only">Action</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Remove</a>
                                    <a class="dropdown-item" href="#">Assign</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- /.col-12 -->
    </div> --}}



    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <h2 class="h3 mb-4 page-title">Settings</h2>
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
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('tiny/assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">{{ $user->nom }}, {{ $user->prenom }}</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac
                                        habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium
                                        blandit sapien. </p>
                                </div>
                                <div class="col">
                                    <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                    <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                    <p class="small mb-0 text-muted">(537) 315-1481</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <button class="btn btn-primary mt-4 float-right" wire:click="update">Mettre à jour</button>
                            </div>
                        </div>
                        <hr class="my-4">
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
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>

                    @endif
                </form>
            </div> <!-- /.card-body -->
        </div> <!-- /.col-12 -->
    </div> <!-- .row -->

</div>
