<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('src/images/wallpaper/mains.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
            <h2 class="subheading">Bienvenue sur Medicall</h2>
            <h1 class="mb-4">Des soins médicaux de qualité chez vous en un click</h1>
            <p>
                <a href="{{route('index')}}" class="btn btn-primary" data-toggle="modal" data-target="#postuler">Rejoignez-nous</a>
                <a href="{{route('index')}}" class="btn btn-white">Contactez-Nous</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-4">
                @livewire('medicall.component.rv')
            </div>
        </div>
    </div>
</section>
