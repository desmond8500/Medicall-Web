<section class="ftco-intro" style="background-image: url({{asset('src/images/wallpaper/perry.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 text-center">
                <h2 class="bg-info rounded">Rejoignez-nous</h2>
                <h3 class="mb-4 text-light bg-info p-2">
                    Si vous êtes infirmier, sage-femme ou kinésithérapeute vous pouvez rejoindre notre équipe où que vou soyez dan le Sénégal
                </h3>
                <p class="mb-0">
                    {{-- <a  class="btn btn-primary">Postulez-maintenant</a> --}}
                    @include('0 vacation.modal.button', ['title'=>'Postulez-mantenant', 'id'=>'postuler'])

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$id}}">
                        {{ $title ?? "Plus d'informations" }}
                    </button> --}}

                    <a href="{{route('index')}}" class="btn btn-white">Contactez-Nous</a>


                </p>
            </div>
        </div>
    </div>
</section>
