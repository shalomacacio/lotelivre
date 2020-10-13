	<!-- Header -->
	<header class="header shop ">
		<div class="custom-middle-inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="{{route('site.home')}}"><img src="{{asset('site/images/logo.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							{{-- <div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div> --}}
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
          </div>

					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select id="estado_id">
									<option selected="selected">Localização</option>
                    @foreach ($estados as $estado)
                    <option value="{{ $estado->id}}">{{ $estado->nome}}</option>
                    @endforeach
								</select>
                <form action="{{ route('site.empreendimentos') }}" method="GET">
                  @csrf
                  <input  id="inpCidade" list="cidades" name="cidade_nome" />
                  <datalist id="cidades">
                  </datalist>
                  <button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
          </div>

          <div class="col-lg-2 col-md-2 col-12">
            <div class="right-bar">
                <ul class="list-main">
                    {{-- <li><i class="ti-alarm-clock"></i>Ofertas</li> --}}
                    <li><i class="ti-headphone-alt"></i><a href="{{route('site.contato')}}">Central de Vendas</a></li>
                </ul>
            </div>
          </div>

				</div>
			</div>
		</div>
		@include('layouts.site-partials.menu')
	</header>
	<!--/ End Header -->

@section('javascript')
<script>
  $( "#estado_id" ).change(function () {
    atualizaCidades();
  });



  function atualizaCidades(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: "{{ route('site.ajaxCidades') }}",
        data: {'estado_id' : $("#estado_id").val() },
        type: "GET",
        dataType: 'json',
        success: function (data) {
          console.log( data );
          $('#cidades').empty();
          $('#inpCidade').empty();
          $.each(data.cidades, function(index, value) {
            $('#cidades').append(
             "<option value="+value.nome+">"
            )
          });
        },
        error: function (data) {
            console.log('Error:', data);
        }
    });
  }
</script>
@endsection
