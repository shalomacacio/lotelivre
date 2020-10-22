<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
      <div class="row mb-2">
        <div class="col-12 text-center pt-3">
            <h1>Terrenos prontos para construir !</h1>
            {{-- <p>Investimentos, tendências, inovações, oportunidades. Acompanhe em um único lugar as novidades de um setor em rápida transformação.</p> --}}
            <h5>Confira nossos Loteamentos em Destaque no Guia de Empreendimentos Destaques deste mês!</h5>
            {{-- <h4>You like this snippet ? click like button</h4> --}}
        </div>
    </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                  @foreach ($empreendimentosDestaque as $empreendimento)
                  <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-img">
                            <a   href="{{ route('site.empreendimento.show', $empreendimento->empreendimento->id) }}" >
                                <img class="default-img" src="{{ url("storage/{$empreendimento->img}") }}" alt="#">
                              @isset($empreendimento->span) <span class="out-of-stock">{{ $empreendimento->span }}</span> @endisset
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="matricula" href="#"><i class=" ti-folder"></i><span>Mat: {{ $empreendimento->empreendimento->matricula }}</span></a>
                                <a title="lancamento" href="#"><i class=" ti-calendar "></i><span>Lançamento: {{ $empreendimento->empreendimento->dt_lancamento }}</span></a>
                                <a title="cnpj" href="#"><i class="ti-files"></i><span>CNPJ: {{ $empreendimento->empreendimento->cnpj }}</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="Saimba mais" href="#"> Saiba mais! </a>
                              </div>
                            </div>
                        </div>
                        <div class="product-content">
                          <h3><a href="product-details.html">{{ $empreendimento->empreendimento->nome }}</a></h3>
                            <div class="product-price">
                                <span class="old">$60.00</span>
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->
