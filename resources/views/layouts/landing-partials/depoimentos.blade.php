

    <!-- Reviews Section Starts -->
    <section class="reviews" id="testemunhos"
    style="background-image: url('{{ asset("storage/site/img/empreendimentos/".$empreendimento->id."/images/emp_2.jpeg") }}');" >
      <div class="container">
          <div class="row align-items-center">
              <div class="col-12 col-carousel">
                  <div class="owl-carousel carousel-main">

                      @foreach ($empreendimento->depoimentos as $depoimento)
                        <div class="item">
                          <div class="view overlay">
                              <div class="mask flex-center rgba-red-strong">
                                  <img src="{{ url("storage/{$depoimento->img}") }}" class="img-fluid  alt="smaple image">
                              <p class="white-text">“ {{ $depoimento->texto }} ”</p>
                                  <h4>{{ $depoimento->nome }} <span>{{$depoimento->created_at}}</span></h4>
                              </div>
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Reviews Section Ends -->
