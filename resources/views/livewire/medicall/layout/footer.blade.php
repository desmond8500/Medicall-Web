<div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading"><a href="#" class="logo">Medicall</a></h2>
                    <p>Soins à domicile</p>
                    <a href="#">Plus d'informations <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Soins à domicile</a></li>
                        <li><a href="#" class="py-1 d-block">Assistance</a></li>
                        <li><a href="#" class="py-1 d-block">Kinésithérapie</a></li>
                        <li><a href="#" class="py-1 d-block">Télémédecine</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Tags</h2>
                    <div class="tagcloud">
                        {{-- @foreach ($page->getTags() as $tag)
                            <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>

                        @endforeach --}}
                        {{-- <a href="#" class="tag-cloud-link">home</a>
                        <a href="#" class="tag-cloud-link">vacation</a>
                        <a href="#" class="tag-cloud-link">rental</a>
                        <a href="#" class="tag-cloud-link">rent</a>
                        <a href="#" class="tag-cloud-link">house</a>
                        <a href="#" class="tag-cloud-link">place</a>
                        <a href="#" class="tag-cloud-link">drinks</a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    {{-- @if ($message = Session::get('mail-success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $message }}
                </div>
                @endif --}}

                <h2 class="footer-heading">Restez informés <span></span> </h2>
                @if (session()->has('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('message') }}
                    </div>
                @endif

                <form wire:submit.prevent='register_news' class="subscribe-form">
                    {{-- @csrf --}}
                    <div class="form-group d-flex">
                        <input type="email" class="form-control rounded-left" wire:model.defer="email" placeholder="Email" required>
                        {{-- @error('email') <span class="error">{{ $message }}</span> --}}
                        <button type="submit" class="form-control submit rounded-right">
                            <i class="fa fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <h2 class="footer-heading mt-5">Suivez nous</h2>
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate"><a target="_blank" href="{{url('https://twitter.com/medicallsante')}}"
                            data-toggle="tooltip" data-placement="top" title="Twitter"><span
                                class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a target="_blank"
                            href="{{url('https://web.facebook.com/Medicallsante-102779334743423/?__tn__=%2Cd%2CP-R&eid=ARBpAVhtyIzSwnSYNAtDd56LxIYkdqy599QlOkpiR9BxRevtgPdH29m_9lzgippyn-rmNbkudxeJmWCg')}}"
                            data-toggle="tooltip" data-placement="top" title="Facebook"><span   class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a target="_blank"  href="{{url('https://www.linkedin.com/in/medicall-sant%C3%A9-suivi-3809021a0/')}}" data-toggle="tooltip" data-placement="top" title="Linkedin"><span  class="fa fa-linkedin"></span></a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="w-100 mt-5 border-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">

                        <p class="copyright mb-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with
                            {{-- <a href="{{route('admin.index')}}"><i class="fa fa-heart" aria-hidden="true"></i></a> --}}

                            by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <p class="mb-0 list-unstyled">

                            <a class="mr-md-3" data-toggle="modal" data-target=".condition">
                                Conditions d'utilisation
                            </a>
                            <a class="mr-md-3" data-toggle="modal" data-target=".politique">
                                Politique de sécurité
                            </a>


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="modal fade condition" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content container">
                {{-- ====================================================================================== --}}
                @include('0 vacation.section.condition_utilisation');
                {{-- ====================================================================================== --}}
            </div>
        </div>
    </div>

    <div class="modal fade politique" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content container">
                {{-- ====================================================================================== --}}
                @include('0 vacation.section.politique_securite');
                {{-- ====================================================================================== --}}
            </div>
        </div>
    </div>
</div>
