<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicall Sante</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('src/images/logo/favicon.ico') }}" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('vacationrental/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('vacationrental/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vacationrental/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vacationrental/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('vacationrental/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('vacationrental/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('vacationrental/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('vacationrental/css/style.css')}}">
    @livewireStyles
</head>
<body>

    @include('0 vacation.index.wrap')
    @livewire('medicall.layout.navbar')

    @yield('content')

    <div class="modal modal-blur fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Titre Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row">
                        <div class="form-group col-md-8">
                            <label class="form-label">Nom du client </label>
                            <input type="text" wire:model.defer="name" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select</label>
                                    <select wire:model="{2:select}" class="form-control">
                                        {{-- @foreach (tabler->getGameGenre() as genre) --}}
                                            <option>hh</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label">Description</label>
                            <textarea wire:model.defer="description" data-bs-toggle="autosize" placeholder="Description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn me-auto" data-bs-dismiss="modal">Fermer</button>
                        <button wire:click="store" class="btn btn-primary" data-bs-dismiss="modal">Ajouter le client</button>
                    </div>
                </div>
            </div>
        </div>



    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>
@livewireScripts
    <script src="{{ asset('vacationrental/js/jquery.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/popper.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('vacationrental/js/scrollax.min.js')}}"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
    {{-- <script src="{{ asset('vacationrental/js/google-map.js')}}"></script> --}}
    <script src="{{ asset('vacationrental/js/main.js')}}"></script>

</body>
</html>
