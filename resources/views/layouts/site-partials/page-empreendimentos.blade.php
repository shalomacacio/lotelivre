<!-- Start Product Area -->
<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Empreendimentos</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Fortaleza</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Woman</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Kids</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Accessories</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Essential</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#prices" role="tab">Prices</a></li> --}}
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    @foreach ($empreendimentos as $empreendimento)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                              <a href="{{route('site.empreendimento.show', $empreendimento->id)}}">
                                                <img class="default-img" src="{{ asset('storage/site/img/empreendimentos/'.$empreendimento->id.'/images/emp_1.jpeg')}}" alt="#">
                                              </a>
                                            <div class="button-head">
                                            <div class="product-action">
                                              <a data-toggle="modal" data-target="#exampleModal" title="matricula" href="#"><i class=" ti-folder"></i><span>Mat: {{ $empreendimento->matricula }}</span></a>
                                            <a title="lancamento" href="#"><i class=" ti-calendar "></i><span>Lançamento: {{ $empreendimento->dt_lancamento }}</span></a>
                                              <a title="cnpj" href="#"><i class="ti-files"></i><span>CNPJ: {{ $empreendimento->cnpj }}</span></a>
                                            </div>
                                            <div class="product-action-2">
                                              <a title="Saimba mais" href="#"> Saiba mais! </a>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="product-content">
                                              <h3><a href="product-details.html">{{ $empreendimento->nome }}</a></h3>
                                                <div class="product-price">
                                                    <span>{{ $empreendimento->cidade->nome }} - {{ $empreendimento->estado->sigla }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->
