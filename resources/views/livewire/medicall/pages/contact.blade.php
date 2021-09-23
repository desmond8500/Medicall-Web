<div>
    @include('0 vacation.section.call_to_action2',['title'=>'Contact' , 'image'=>'src/images/wallpaper/services.jpg'])
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters">
                {{-- <div class="col-md-8">
                    <div id="map" class="map"></div>
                </div> --}}
                {{-- <div class="col-md-4 p-4 p-md-5 bg-white">
                    <h2 class="font-weight-bold mb-4">Où que vous soyez nous serons là</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.</p>
                    <p><a href="#" class="btn btn-primary">Prendre un rendez-vous</a></p>
                </div> --}}
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Message</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    <div id="form-message-success" class="mb-4">
                                        Laissez nous un message
                                    </div>
                                    {{-- <form method="POST" id="contactForm" name="contactForm" class="contactForm"> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Nom {{ $nom }} </label>
                                                    <input type="text" class="form-control" wire:model.defer="nom" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email {{ $email }}</label>
                                                    <input type="email" class="form-control" wire:model.defer="email"  placeholder="mail">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Objet {{ $objet }}</label>
                                                    <input type="text" class="form-control" wire:model.defer="objet"  placeholder="Objet">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message {{ $message }}</label>
                                                    <textarea wire:model.defer="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="btn btn-primary text-light" wire:click="store">Envoyer le message</a>
                                            </div>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                    <h3>Contactez-nous</h3>
                                    <p class="mb-4">Vous pouvez nous contacter à travers nos divers canaux</p>
                                    {{-- <div class="dbox w-100 d-flex align-items-start">
                                            <div class="icon d-flex align-items-center justify-content-center">
                                                <span class="fa fa-map-marker"></span>
                                            </div>
                                            <div class="text pl-3">
                                                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                            </div>
                                        </div> --}}
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Téléphone:</span> <a href="tel://+221778372390"> +221 77 837 23 90</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Email:</span> <a href="mailto:contact@medicallsante.com">contact@medicallsante.com</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Website :</span> <a target="_blank" href="{{ url('http://medicallsante.yonkou.info')}}">medicallsante.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
