@section('css')
<style>

.b-0 {
    bottom: 0;
}
.bg-shadow {
    background: rgba(76, 76, 76, 0);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
    background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
}
.top-indicator {
    right: 0;
    top: 1rem;
    bottom: inherit;
    left: inherit;
    margin-right: 1rem;
}
.overflow {
    position: relative;
    overflow: hidden;
}
.zoom img {
    transition: all 0.2s linear;
}
.zoom:hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
}

</style>

@endsection


<!--Container-->
<div class="container">
  <div class="row mb-2">
      <div class="col-12 text-center pt-3">
          <h1>Notícias do Mercado Imobiliário </h1>
          {{-- <p>Investimentos, tendências, inovações, oportunidades. </p> --}}
          <h5>Acompanhe em um único lugar as novidades de um setor em rápida transformação.</h5>
          {{-- <h4>You like this snippet ? click like button</h4> --}}
      </div>
  </div>

  <!--Start code-->
  <div class="row">
      <div class="col-12 pb-5">
          <!--SECTION START-->
          <section class="row">
              <!--Start slider news-->
              <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                  <div id="featured" class="carousel slide carousel" data-ride="carousel">
                      <!--carousel inner-->
                      <div class="carousel-inner">
                          <!--Item slider-->
                        @foreach ($noticias as $noticia)
                          <!--Item slider-->
                          <div class="carousel-item @isset($noticia->active) active @endisset  ">
                              <div class="card border-0 rounded-0 text-light overflow zoom">
                                  <div class="position-relative">
                                      <!--thumbnail img-->
                                      <div class="ratio_left-cover-1 image-wrapper">
                                        <a href="{{ $noticia->link}}">
                                              <img class="img-fluid w-100"
                                                   src="{{ url("storage/{$noticia->img}") }}"
                                                   alt="img" width="342px" height="292px">
                                          </a>
                                      </div>
                                      <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                          <!--title-->
                                          <a href="{{ $noticia->link}}">
                                          <h2 class="h3 post-title text-white my-1"> {{ $noticia->titulo }}</h2>
                                          </a>
                                          <!-- meta title -->
                                          <div class="news-meta">
                                              <span class="news-author">by <a class="text-white font-weight-bold" href="../category/author.html">Jennifer</a></span>
                                              <span class="news-date"> @isset($noticia->data_noticia ) {{$noticia->data_noticia  }} @endisset</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      </div>
                      <!--end carousel inner-->
                  </div>

                  <!--navigation-->
                  <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
              <!--End slider news-->

              <!--Start box news-->
              <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                  <div class="row">
                      @foreach ($thumbnails as $thumbnail)

                      <!--news box-->
                      <div class="col-6 pb-1 {{ $thumbnail->posicao }} ">
                          <div class="card border-0 rounded-0 text-white overflow zoom">
                              <div class="position-relative">
                                  <!--thumbnail img-->
                                  <div class="ratio_right-cover-2 image-wrapper">
                                      <a href="@isset($thumbnail->link) {{ $thumbnail->link }} @endisset  ">
                                          <img class="img-fluid"
                                              src="{{ url("storage/{$thumbnail->img}") }}"
                                               alt="img">
                                      </a>
                                  </div>
                                  <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                      <!-- category -->
                                     @isset($thumbnail->span)
                                      <a class="p-1 badge {{ $thumbnail->span_cor }} rounded-0" >{{ $thumbnail->span}}</a>
                                     @endisset
                                      <!--title-->
                                      <a href="{{ $thumbnail->link}}">
                                        <h2 class="h5 text-white my-1">{{ $thumbnail->titulo}}</h2>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endforeach

                  </div>
              </div>
              <!--End box news-->
          </section>
          <!--END SECTION-->
      </div>
  </div>
  <!--end code-->

</div>
