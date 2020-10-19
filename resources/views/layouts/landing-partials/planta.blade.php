
    <!-- Services Section -->
    <section class="services" id="planta" style=" background-color: {!! $empreendimento->bg_planta !!};">
      <div class="container">
          <div class="services-inner">
              <div class="row">
                  <div class="col-lg-7 col1">
                      <h2>{{ $empreendimento->titulo_planta }}</h2>
                      <p> {{ $empreendimento->texto_planta }} </p>
                      <div class="row">
                        @foreach ($empreendimento->itens as $item)
                          <div class="col-lg-6 features-about-inner aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                              <div class="row">
                                  <div class="col-lg-3 col-md-2">
                                      <div class="thumbnail">
                                          <div class="gradient"></div>
                                          <figure>
                                            <img src="{{ url("storage/{$item->img}") }}" alt="review">
                                          </figure>
                                      </div>
                                  </div>
                                  <div class="col-lg-9 col-md-10 features-about-content">
                                    <h4>{{ $item->titulo }}</h4>
                                    <p> {{ $item->descricao }} </p>
                                  </div>
                              </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
                  <div class="col-lg-5 right-thumbnail">
                      <figure>
                          <img src="{{asset('storage/site/img/empreendimentos/'.$empreendimento->id.'/images/emp_3.jpeg')}}"  alt="testimonial">
                      </figure>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- END OF Services -->
