@extends('layouts.site')
@section('content')


	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>IMAGEM</th>
                <th>BLOG</th>
                <th>CATEGORIA</th>
                <th>DATA</th>
							</tr>
						</thead>
						<tbody>
                @foreach ($blogs as $blog)
                <tr>
                  <td class="image" data-title="No"><img src="{{ url("storage/{$blog->img}") }}" alt="#"></td>
                  <td class="product-des" data-title="Description">
                  <p class="product-name"><a href="{{ route('site.blog.show', $blog->id)}}">{{ $blog->titulo }}</a></p>
                    <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p>
                  </td>
                  <td class="price" data-title="categoria"><span>{{ $blog->categoria->descricao }} </span></td>
                  <td class="price" data-title="categoria"><span>{{ $blog->created_at }} </span></td>
                </tr>
                @endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

@endsection
