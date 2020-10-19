    <!-- banner start -->
    <section id="home" class="banner"
      style="background-image: url('{{ asset("storage/site/img/empreendimentos/".$empreendimento->id."/images/emp_0.jpeg") }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-inner" data-aos="fade-up" data-aos-duration="1000" style="width: 700px">
                        <h1>
                          @isset($empreendimento->texto_banner)
                            {{ $empreendimento->texto_banner }}
                          @endisset
                        </h1>
                          @isset($empreendimento->btn_banner_txt)
                            <button type="button" class="btn">{!! $empreendimento->btn_banner_txt !!}</button>
                         @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->
