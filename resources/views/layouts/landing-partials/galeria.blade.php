

    <!-- TESTIMONIALS -->
    <section class="testimonials" id="imagens">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 heading">
                  <h4> {{ $empreendimento->titulo_galeria }} </h4>
                  <p>{{ $empreendimento->texto_galeria }}</p>
              </div>
              <div class="col-12 col-carousel">
                  <div class="owl-carousel carousel-main">
                    @foreach ($empreendimento->galerias as $galeria)
                      <div class="item">
                        <div class="view overlay">
                          <img src="{{ url("storage/{$galeria->img}") }}"  class="img-fluid  alt="smaple image"  width="370px" height="300px">
                            <div class="mask flex-center rgba-red-strong">
                                <h3> @isset($galeria->titulo) {{ $galeria->titulo }}  @endisset  </h3>
                                <p class="white-text"> @isset($galeria->texto) {{ $galeria->texto }}  @endisset  </p>
                            </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- TESTIMONIALS SECTION END -->
