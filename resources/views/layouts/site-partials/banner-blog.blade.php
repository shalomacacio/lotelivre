<!-- Start Shop Blog  -->
<section class="shop-blog section">
  <div class="container">
    <div class="row mb-2">
      <div class="col-12 text-center pt-3">
          <h1>Confira os nossos Blogs e aprenda mais sobre </h1>
          {{-- <p>Investimentos, tendências, inovações, oportunidades.</p> --}}
          <h5>Dicas, informativos e curiosidades sobre os produtos e serviços oferecidos pelo Lote Livre</h5>
          {{-- <h4>You like this snippet ? click like button</h4> --}}
      </div>
  </div>
    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-lg-4 col-md-6 col-12">
        <!-- Start Single Blog  -->
        <div class="shop-single-blog">
          <img src="{{ url("storage/{$blog->img}") }}" alt="#"   width="370px" height="300px">
          <div class="content">
            <p class="date">{{  Carbon\Carbon::parse($blog->created_at)->format('d-m-Y') }}</p>
            <a href="{{ route('site.blog.show', $blog->id) }}" class="title">{{ $blog->titulo }}</a>
            <a href="{{ route('site.blog.show', $blog->id) }}" class="more-btn">Continue lendo</a>
          </div>
        </div>
        <!-- End Single Blog  -->
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- End Shop Blog  -->
