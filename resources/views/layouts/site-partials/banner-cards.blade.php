<!-- Start Midium Banner  -->
<section class="midium-banner">
    <div class="container">
        <div class="row">
          @foreach ($cards as $card)
            <!-- Single Banner  -->
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-banner">
                    <img src="{{ url("storage/{$card->img}") }}"  alt="#">
                    <div class="content">
                        <p>@isset($card->subtitulo){{ $card->subtitulo}} @endisset</p>
                        <h3>@isset($card->titulo){{ $card->titulo}} @endisset</p> <span> @isset($card->span){{ $card->span}} @endisset</p></span></h3>
                        @isset($card->txt_button)
                        <a href="{{ $card->link_button}}" target="_blank" >{{ $card->txt_button}}</a>
                        @endisset
                    </div>
                </div>
            </div>
            <!-- /End Single Banner  -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Midium Banner -->
