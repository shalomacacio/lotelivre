@extends('layouts.site')
@section('content')


	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<tbody>
                @foreach ($blogs as $blog)
                <tr>
                  <td class="image" data-title="No"><img src="{{ url("storage/{$blog->img}") }}" alt="#"></td>
                  <td class="product-des" data-title="Description">
                    <p class="product-name"><a href="{{ route('site.blog.show', $blog->id)}}">{{ $blog->titulo }}</a></p>
                    <p class="product-des">{{ $blog->categoria->descricao }} - {{ $blog->created_at }}  </p>
                  </td>
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
