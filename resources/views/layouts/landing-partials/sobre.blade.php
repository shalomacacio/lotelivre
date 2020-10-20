
    <!--About Section -->
    <section class="about" id="projects">
      <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 col-12">
                  <figure>
                      <img src="{{asset('storage/site/img/empreendimentos/'.$empreendimento->id.'/images/emp_4.jpeg')}}" alt="Trulli" style="width:100%">
                      <figcaption>
                          <h3> {{ $empreendimento->titulo_card_1 }} </h3>
                          <p>  {{ $empreendimento->texto_card_1 }} </p>
                      </figcaption>
                  </figure>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                  <figure>
                    <img src="{{asset('storage/site/img/empreendimentos/'.$empreendimento->id.'/images/emp_5.jpeg')}}" alt="Trulli" style="width:100%">
                    <figcaption>
                          <h3> {{ $empreendimento->titulo_card_2 }} </h3>
                          <p>  {{ $empreendimento->texto_card_2 }} </p>                      </figcaption>
                  </figure>
              </div>
              <!--/col-->
              <div class="col-lg-4 col-md-12 col-12">
                  <span class="anchor" id="formContact"></span>
                  <!-- form user info -->
                  <div class="card card-outline-secondary">
                      <div class="card-header">
                          <h4>Faça um Orçamento </h4>
                      </div>
                      <div class="card-body">
                          <form class="form" role="form" autocomplete="off">
                              <fieldset>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <input type="text" name="name2" id="name2" placeholder="Enter Full Name" class="form-control" required="">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <input type="text" name="email2" id="email2" class="form-control" placeholder="Enter Email Id" required="">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <input type="text" name="number" id="number2" class="form-control" placeholder="Enter Mobile Number" required="">
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-lg-12">
                                          <textarea rows="6" name="message2" id="message2" class="form-control" placeholder="Your Message" required=""></textarea>
                                      </div>
                                  </div>
                                  <button type="submit" class="btn btn-secondary btn-lg float-right">Submit & Get Free Quotation</button>
                              </fieldset>
                          </form>
                      </div>
                  </div>
                  <!-- /form user info -->
              </div>
              <!--/col-->
          </div>
          <div class="row about-contant" id="quem-somos">
            <div class="col-12 heading">
              <h3>{{ $empreendimento->nome }} </h3>
            <p>{!! $empreendimento->texto_descritivo !!}</p>
            </div>
          </div>
      </div>
  </section>
  <!--About Section End -->
